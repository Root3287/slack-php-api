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

class ObjsUserItem0Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'JoliCode\\Slack\\Api\\Model\\ObjsUserItem0';
    }

    public function supportsNormalization($data, $format = null)
    {
        return get_class($data) === 'JoliCode\\Slack\\Api\\Model\\ObjsUserItem0';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            return null;
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \JoliCode\Slack\Api\Model\ObjsUserItem0();
        if (property_exists($data, 'color') && $data->{'color'} !== null) {
            $object->setColor($data->{'color'});
        }
        if (property_exists($data, 'deleted') && $data->{'deleted'} !== null) {
            $object->setDeleted($data->{'deleted'});
        }
        if (property_exists($data, 'enterprise_user') && $data->{'enterprise_user'} !== null) {
            $object->setEnterpriseUser($this->denormalizer->denormalize($data->{'enterprise_user'}, 'JoliCode\\Slack\\Api\\Model\\ObjsEnterpriseUser', 'json', $context));
        }
        if (property_exists($data, 'has_2fa') && $data->{'has_2fa'} !== null) {
            $object->setHas2fa($data->{'has_2fa'});
        }
        if (property_exists($data, 'id') && $data->{'id'} !== null) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'is_admin') && $data->{'is_admin'} !== null) {
            $object->setIsAdmin($data->{'is_admin'});
        }
        if (property_exists($data, 'is_app_user') && $data->{'is_app_user'} !== null) {
            $object->setIsAppUser($data->{'is_app_user'});
        }
        if (property_exists($data, 'is_bot') && $data->{'is_bot'} !== null) {
            $object->setIsBot($data->{'is_bot'});
        }
        if (property_exists($data, 'is_invited_user') && $data->{'is_invited_user'} !== null) {
            $object->setIsInvitedUser($data->{'is_invited_user'});
        }
        if (property_exists($data, 'is_owner') && $data->{'is_owner'} !== null) {
            $object->setIsOwner($data->{'is_owner'});
        }
        if (property_exists($data, 'is_primary_owner') && $data->{'is_primary_owner'} !== null) {
            $object->setIsPrimaryOwner($data->{'is_primary_owner'});
        }
        if (property_exists($data, 'is_restricted') && $data->{'is_restricted'} !== null) {
            $object->setIsRestricted($data->{'is_restricted'});
        }
        if (property_exists($data, 'is_ultra_restricted') && $data->{'is_ultra_restricted'} !== null) {
            $object->setIsUltraRestricted($data->{'is_ultra_restricted'});
        }
        if (property_exists($data, 'locale') && $data->{'locale'} !== null) {
            $object->setLocale($data->{'locale'});
        }
        if (property_exists($data, 'name') && $data->{'name'} !== null) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'presence') && $data->{'presence'} !== null) {
            $object->setPresence($data->{'presence'});
        }
        if (property_exists($data, 'profile') && $data->{'profile'} !== null) {
            $object->setProfile($this->denormalizer->denormalize($data->{'profile'}, 'JoliCode\\Slack\\Api\\Model\\ObjsUserProfile', 'json', $context));
        }
        if (property_exists($data, 'real_name') && $data->{'real_name'} !== null) {
            $object->setRealName($data->{'real_name'});
        }
        if (property_exists($data, 'team') && $data->{'team'} !== null) {
            $object->setTeam($data->{'team'});
        }
        if (property_exists($data, 'team_id') && $data->{'team_id'} !== null) {
            $object->setTeamId($data->{'team_id'});
        }
        if (property_exists($data, 'team_profile') && $data->{'team_profile'} !== null) {
            $object->setTeamProfile($this->denormalizer->denormalize($data->{'team_profile'}, 'JoliCode\\Slack\\Api\\Model\\ObjsUserItem0TeamProfile', 'json', $context));
        }
        if (property_exists($data, 'two_factor_type') && $data->{'two_factor_type'} !== null) {
            $object->setTwoFactorType($data->{'two_factor_type'});
        }
        if (property_exists($data, 'tz') && $data->{'tz'} !== null) {
            $object->setTz($data->{'tz'});
        }
        if (property_exists($data, 'tz_label') && $data->{'tz_label'} !== null) {
            $object->setTzLabel($data->{'tz_label'});
        }
        if (property_exists($data, 'tz_offset') && $data->{'tz_offset'} !== null) {
            $object->setTzOffset($data->{'tz_offset'});
        }
        if (property_exists($data, 'updated') && $data->{'updated'} !== null) {
            $object->setUpdated($data->{'updated'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getColor()) {
            $data->{'color'} = $object->getColor();
        }
        if (null !== $object->getDeleted()) {
            $data->{'deleted'} = $object->getDeleted();
        }
        if (null !== $object->getEnterpriseUser()) {
            $data->{'enterprise_user'} = $this->normalizer->normalize($object->getEnterpriseUser(), 'json', $context);
        }
        if (null !== $object->getHas2fa()) {
            $data->{'has_2fa'} = $object->getHas2fa();
        }
        if (null !== $object->getId()) {
            $data->{'id'} = $object->getId();
        }
        if (null !== $object->getIsAdmin()) {
            $data->{'is_admin'} = $object->getIsAdmin();
        }
        if (null !== $object->getIsAppUser()) {
            $data->{'is_app_user'} = $object->getIsAppUser();
        }
        if (null !== $object->getIsBot()) {
            $data->{'is_bot'} = $object->getIsBot();
        }
        if (null !== $object->getIsInvitedUser()) {
            $data->{'is_invited_user'} = $object->getIsInvitedUser();
        }
        if (null !== $object->getIsOwner()) {
            $data->{'is_owner'} = $object->getIsOwner();
        }
        if (null !== $object->getIsPrimaryOwner()) {
            $data->{'is_primary_owner'} = $object->getIsPrimaryOwner();
        }
        if (null !== $object->getIsRestricted()) {
            $data->{'is_restricted'} = $object->getIsRestricted();
        }
        if (null !== $object->getIsUltraRestricted()) {
            $data->{'is_ultra_restricted'} = $object->getIsUltraRestricted();
        }
        if (null !== $object->getLocale()) {
            $data->{'locale'} = $object->getLocale();
        }
        if (null !== $object->getName()) {
            $data->{'name'} = $object->getName();
        }
        if (null !== $object->getPresence()) {
            $data->{'presence'} = $object->getPresence();
        }
        if (null !== $object->getProfile()) {
            $data->{'profile'} = $this->normalizer->normalize($object->getProfile(), 'json', $context);
        }
        if (null !== $object->getRealName()) {
            $data->{'real_name'} = $object->getRealName();
        }
        if (null !== $object->getTeam()) {
            $data->{'team'} = $object->getTeam();
        }
        if (null !== $object->getTeamId()) {
            $data->{'team_id'} = $object->getTeamId();
        }
        if (null !== $object->getTeamProfile()) {
            $data->{'team_profile'} = $this->normalizer->normalize($object->getTeamProfile(), 'json', $context);
        }
        if (null !== $object->getTwoFactorType()) {
            $data->{'two_factor_type'} = $object->getTwoFactorType();
        }
        if (null !== $object->getTz()) {
            $data->{'tz'} = $object->getTz();
        }
        if (null !== $object->getTzLabel()) {
            $data->{'tz_label'} = $object->getTzLabel();
        }
        if (null !== $object->getTzOffset()) {
            $data->{'tz_offset'} = $object->getTzOffset();
        }
        if (null !== $object->getUpdated()) {
            $data->{'updated'} = $object->getUpdated();
        }

        return $data;
    }
}