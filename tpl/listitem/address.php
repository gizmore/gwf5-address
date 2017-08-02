<?php $address instanceof GWF_Address;
$id = $address->getID();
?>
<md-list-item class="md-2-line" ng-click="null" href="<?= href('Address', 'Crud', '&id='.$id); ?>">
  <div class="md-list-item-text" layout="column">
    <h3><?= htmle($address->getStreet()); ?></h3>
    <p><?= htmle(t('address_line', [$address->getZIP(), $address->getCity(), $address->getCountry()->displayName()])); ?></p>
  </div>
</md-list-item>
