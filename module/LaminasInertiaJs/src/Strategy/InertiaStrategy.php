<?php

namespace LaminasInertiaJs\Strategy;

use Laminas\Http\Header\GenericHeader;
use Laminas\View\Renderer\RendererInterface;
use Laminas\View\Strategy\JsonStrategy;
use Laminas\View\ViewEvent;
use LaminasInertiaJs\Model\InertiaModel;

class InertiaStrategy extends JsonStrategy
{
    public function __construct(private RendererInterface $jsonRenderer, private RendererInterface $phpRenderer) {}

    public function injectResponse(ViewEvent $e): void
    {
        parent::injectResponse($e);

        $request = $e->getRequest();

        /** @var ?GenericHeader $inertiaHeader */
        $inertiaHeader = $request->getHeaders()->get('X-Inertia');
        if ($inertiaHeader instanceof GenericHeader && $inertiaHeader->getFieldValue() == 'true') {
            $response = $e->getResponse();

            $response->getHeaders()->addHeader(new GenericHeader('X-Inertia', true));
        }
    }

    public function selectRenderer(ViewEvent $e): ?RendererInterface
    {
        $model = $e->getModel();

        if (!$model instanceof InertiaModel) {
            return null;
        }

        $request = $e->getRequest();

        /** @var ?GenericHeader $inertiaHeader */
        $inertiaHeader = $request->getHeaders()->get('X-Inertia');
        if ($inertiaHeader instanceof GenericHeader && $inertiaHeader->getFieldValue() == 'true') {
            // this does not work properly
            $model->setTerminal(true);

            return $this->jsonRenderer;
        }

        return $this->phpRenderer;
    }
}