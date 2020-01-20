<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ObjsConversationItem2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsConversationItem2';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsConversationItem2';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsConversationItem2();
        if (property_exists($data, 'created') && $data->{'created'} !== null) {
            $object->setCreated($data->{'created'});
        }
        if (property_exists($data, 'has_pins') && $data->{'has_pins'} !== null) {
            $object->setHasPins($data->{'has_pins'});
        }
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'is_ext_shared') && $data->{'is_ext_shared'} !== null) {
            $object->setIsExtShared($data->{'is_ext_shared'});
        }
        if (property_exists($data, 'is_im') && $data->{'is_im'} !== null) {
            $object->setIsIm($data->{'is_im'});
        }
        if (property_exists($data, 'is_open') && $data->{'is_open'} !== null) {
            $object->setIsOpen($data->{'is_open'});
        }
        if (property_exists($data, 'is_org_shared') && $data->{'is_org_shared'} !== null) {
            $object->setIsOrgShared($data->{'is_org_shared'});
        }
        if (property_exists($data, 'is_shared') && $data->{'is_shared'} !== null) {
            $object->setIsShared($data->{'is_shared'});
        }
        if (property_exists($data, 'is_starred') && $data->{'is_starred'} !== null) {
            $object->setIsStarred($data->{'is_starred'});
        }
        if (property_exists($data, 'is_user_deleted') && $data->{'is_user_deleted'} !== null) {
            $object->setIsUserDeleted($data->{'is_user_deleted'});
        }
        if (property_exists($data, 'last_read') && $data->{'last_read'} !== null) {
            $object->setLastRead($data->{'last_read'});
        }
        if (property_exists($data, 'latest') && $data->{'latest'} !== null) {
            $object->setLatest($data->{'latest'});
        }
        if (property_exists($data, 'parent_conversation') && $data->{'parent_conversation'} !== null) {
            $object->setParentConversation($data->{'parent_conversation'});
        }
        if (property_exists($data, 'pin_count') && $data->{'pin_count'} !== null) {
            $object->setPinCount($data->{'pin_count'});
        }
        if (property_exists($data, 'priority') && $data->{'priority'} !== null) {
            $object->setPriority($data->{'priority'});
        }
        if (property_exists($data, 'shares') && $data->{'shares'} !== null) {
            $values = [];
            foreach ($data->{'shares'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'JoliCode\\Slack\\Api\\Model\\ObjsConversationItem2SharesItem', 'json', $context);
            }
            $object->setShares($values);
        }
        if (property_exists($data, 'unread_count') && $data->{'unread_count'} !== null) {
            $object->setUnreadCount($data->{'unread_count'});
        }
        if (property_exists($data, 'unread_count_display') && $data->{'unread_count_display'} !== null) {
            $object->setUnreadCountDisplay($data->{'unread_count_display'});
        }
        if (property_exists($data, 'user') && $data->{'user'} !== null) {
            $object->setUser($data->{'user'});
        }
        if (property_exists($data, 'version') && $data->{'version'} !== null) {
            $object->setVersion($data->{'version'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getCreated()) {
            $data->{'created'} = $object->getCreated();
        }
        if (null !== $object->getHasPins()) {
            $data->{'has_pins'} = $object->getHasPins();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getIsExtShared()) {
            $data->{'is_ext_shared'} = $object->getIsExtShared();
        }
        if (null !== $object->getIsIm()) {
            $data->{'is_im'} = $object->getIsIm();
        }
        if (null !== $object->getIsOpen()) {
            $data->{'is_open'} = $object->getIsOpen();
        }
        if (null !== $object->getIsOrgShared()) {
            $data->{'is_org_shared'} = $object->getIsOrgShared();
        }
        if (null !== $object->getIsShared()) {
            $data->{'is_shared'} = $object->getIsShared();
        }
        if (null !== $object->getIsStarred()) {
            $data->{'is_starred'} = $object->getIsStarred();
        }
        if (null !== $object->getIsUserDeleted()) {
            $data->{'is_user_deleted'} = $object->getIsUserDeleted();
        }
        if (null !== $object->getLastRead()) {
            $data->{'last_read'} = $object->getLastRead();
        }
        if (null !== $object->getLatest()) {
            $data->{'latest'} = $object->getLatest();
        }
        if (null !== $object->getParentConversation()) {
            $data->{'parent_conversation'} = $object->getParentConversation();
        }
        if (null !== $object->getPinCount()) {
            $data->{'pin_count'} = $object->getPinCount();
        }
        if (null !== $object->getPriority()) {
            $data->{'priority'} = $object->getPriority();
        }
        if (null !== $object->getShares()) {
            $values = [];
            foreach ($object->getShares() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'shares'} = $values;
        }
        if (null !== $object->getUnreadCount()) {
            $data->{'unread_count'} = $object->getUnreadCount();
        }
        if (null !== $object->getUnreadCountDisplay()) {
            $data->{'unread_count_display'} = $object->getUnreadCountDisplay();
        }
        if (null !== $object->getUser()) {
            $data->{'user'} = $object->getUser();
        }
        if (null !== $object->getVersion()) {
            $data->{'version'} = $object->getVersion();
        }

        return $data;
    }
}
