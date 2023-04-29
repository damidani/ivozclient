# UserDetailed

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | 
**lastname** | **string** |  | 
**email** | **string** |  | [optional] 
**pass** | **string** |  | [optional] 
**do_not_disturb** | **bool** |  | [default to false]
**is_boss** | **bool** |  | [default to false]
**active** | **bool** |  | [default to false]
**max_calls** | **int** |  | 
**external_ip_calls** | **string** |  | [default to '0']
**reject_call_method** | **string** |  | [default to 'rfc']
**voicemail_enabled** | **bool** |  | [default to false]
**voicemail_send_mail** | **bool** |  | [default to false]
**voicemail_attach_sound** | **bool** |  | [default to false]
**multi_contact** | **bool** |  | [default to false]
**gs_qr_code** | **bool** |  | [default to false]
**id** | **int** |  | [optional] 
**call_acl** | [**\Ivz\Client\Model\CallAcl**](CallAcl.md) |  | [optional] 
**boss_assistant** | [**\Ivz\Client\Model\User**](User.md) |  | [optional] 
**boss_assistant_white_list** | [**\Ivz\Client\Model\MatchList**](MatchList.md) |  | [optional] 
**transformation_rule_set** | [**\Ivz\Client\Model\TransformationRuleSet**](TransformationRuleSet.md) |  | [optional] 
**language** | [**\Ivz\Client\Model\Language**](Language.md) |  | [optional] 
**terminal** | [**\Ivz\Client\Model\Terminal**](Terminal.md) |  | [optional] 
**extension** | [**\Ivz\Client\Model\Extension**](Extension.md) |  | [optional] 
**timezone** | [**\Ivz\Client\Model\Timezone**](Timezone.md) |  | [optional] 
**outgoing_ddi** | [**\Ivz\Client\Model\Ddi**](Ddi.md) |  | [optional] 
**outgoing_ddi_rule** | [**\Ivz\Client\Model\OutgoingDdiRule**](OutgoingDdiRule.md) |  | [optional] 
**voicemail_locution** | [**\Ivz\Client\Model\Locution**](Locution.md) |  | [optional] 
**location** | [**\Ivz\Client\Model\Location**](Location.md) |  | [optional] 
**pickup_group_ids** | **int[]** | Pickup group ids | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


