<?php
/**
 * DO NOT EDIT THIS FILE!
 *
 * This file was automatically generated from external sources.
 *
 * Any manual change here will be lost the next time the SDK
 * is updated. You've been warned!
 */

namespace DTS\eBaySDK\Logistics\Services;

class LogisticsService extends \DTS\eBaySDK\Logistics\Services\LogisticsBaseService
{
    const API_VERSION = 'v1_beta';

    /**
     * @property array $operations Associative array of operations provided by the service.
     */
    protected static $operations = [
        'CreateShippingQuote' => [
            'method' => 'POST',
            'resource' => 'shipping_quote',
            'responseClass' => '\DTS\eBaySDK\Logistics\Types\CreateShippingQuoteRestResponse',
            'params' => [
            ]
        ],
        'GetShippingQuote' => [
            'method' => 'GET',
            'resource' => 'shipping_quote/{shippingQuoteId}',
            'responseClass' => '\DTS\eBaySDK\Logistics\Types\GetShippingQuoteRestResponse',
            'params' => [
                'shippingQuoteId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'GetShipment' => [
            'method' => 'GET',
            'resource' => 'shipment/{shipmentId}',
            'responseClass' => '\DTS\eBaySDK\Logistics\Types\GetShipmentRestResponse',
            'params' => [
                'shipmentId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ],
        'CreateFromShippingQuote' => [
            'method' => 'POST',
            'resource' => 'shipment/create_from_shipping_quote',
            'responseClass' => '\DTS\eBaySDK\Logistics\Types\CreateFromShippingQuoteRestResponse',
            'params' => [
            ]
        ],
        'CancelShipment' => [
            'method' => 'POST',
            'resource' => 'shipment/{shipmentId}/cancel',
            'responseClass' => '\DTS\eBaySDK\Logistics\Types\CancelShipmentRestResponse',
            'params' => [
                'shipmentId' => [
                    'valid' => ['string'],
                    'required' => true
                ]
            ]
        ]
    ];

    /**
     * @param array $config Configuration option values.
     */
    public function __construct(array $config = [])
    {
        parent::__construct($config);
    }

    /**
     * @param \DTS\eBaySDK\Logistics\Types\CreateShippingQuoteRestRequest $request
     * @return \DTS\eBaySDK\Logistics\Types\CreateShippingQuoteRestResponse
     */
    public function createShippingQuote(\DTS\eBaySDK\Logistics\Types\CreateShippingQuoteRestRequest $request)
    {
        return $this->createShippingQuoteAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Logistics\Types\CreateShippingQuoteRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createShippingQuoteAsync(\DTS\eBaySDK\Logistics\Types\CreateShippingQuoteRestRequest $request)
    {
        return $this->callOperationAsync('CreateShippingQuote', $request);
    }

    /**
     * @param \DTS\eBaySDK\Logistics\Types\GetShippingQuoteRestRequest $request
     * @return \DTS\eBaySDK\Logistics\Types\GetShippingQuoteRestResponse
     */
    public function getShippingQuote(\DTS\eBaySDK\Logistics\Types\GetShippingQuoteRestRequest $request)
    {
        return $this->getShippingQuoteAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Logistics\Types\GetShippingQuoteRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShippingQuoteAsync(\DTS\eBaySDK\Logistics\Types\GetShippingQuoteRestRequest $request)
    {
        return $this->callOperationAsync('GetShippingQuote', $request);
    }

    /**
     * @param \DTS\eBaySDK\Logistics\Types\GetShipmentRestRequest $request
     * @return \DTS\eBaySDK\Logistics\Types\GetShipmentRestResponse
     */
    public function getShipment(\DTS\eBaySDK\Logistics\Types\GetShipmentRestRequest $request)
    {
        return $this->getShipmentAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Logistics\Types\GetShipmentRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getShipmentAsync(\DTS\eBaySDK\Logistics\Types\GetShipmentRestRequest $request)
    {
        return $this->callOperationAsync('GetShipment', $request);
    }

     /**
     * @param \DTS\eBaySDK\Logistics\Types\CreateFromShippingQuoteRestRequest $request
     * @return \DTS\eBaySDK\Logistics\Types\CreateFromShippingQuoteRestResponse
     */
    public function createFromShippingQuote(\DTS\eBaySDK\Logistics\Types\CreateFromShippingQuoteRestRequest $request)
    {
        return $this->createFromShippingQuoteAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Logistics\Types\CreateFromShippingQuoteRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFromShippingQuoteAsync(\DTS\eBaySDK\Logistics\Types\CreateFromShippingQuoteRestRequest $request)
    {
        return $this->callOperationAsync('CreateFromShippingQuote', $request);
    }

    /**
     * @param \DTS\eBaySDK\Logistics\Types\CancelShipmentRestRequest $request
     * @return \DTS\eBaySDK\Logistics\Types\CancelShipmentRestResponse
     */
    public function cancelShipment(\DTS\eBaySDK\Logistics\Types\CancelShipmentRestRequest $request)
    {
        return $this->cancelShipmentAsync($request)->wait();
    }

    /**
     * @param \DTS\eBaySDK\Logistics\Types\CancelShipmentRestRequest $request
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelShipmentAsync(\DTS\eBaySDK\Logistics\Types\CancelShipmentRestRequest $request)
    {
        return $this->callOperationAsync('CancelShipment', $request);
    }
}
