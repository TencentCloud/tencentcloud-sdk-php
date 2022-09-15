<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Batch\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 黑石计算环境
 *
 * @method string getEnvName() 获取计算环境名称
 * @method void setEnvName(string $EnvName) 设置计算环境名称
 * @method EnvDataCpm getEnvData() 获取计算环境具体参数
 * @method void setEnvData(EnvDataCpm $EnvData) 设置计算环境具体参数
 * @method integer getDesiredComputeNodeCount() 获取计算节点期望个数
 * @method void setDesiredComputeNodeCount(integer $DesiredComputeNodeCount) 设置计算节点期望个数
 * @method string getEnvDescription() 获取计算环境描述
 * @method void setEnvDescription(string $EnvDescription) 设置计算环境描述
 * @method string getEnvType() 获取计算环境管理类型， 取值MANAGED。
 * @method void setEnvType(string $EnvType) 设置计算环境管理类型， 取值MANAGED。
 * @method array getAuthentications() 获取授权信息
 * @method void setAuthentications(array $Authentications) 设置授权信息
 * @method array getInputMappings() 获取输入映射信息
 * @method void setInputMappings(array $InputMappings) 设置输入映射信息
 * @method Notification getNotifications() 获取通知信息
 * @method void setNotifications(Notification $Notifications) 设置通知信息
 * @method string getActionIfComputeNodeInactive() 获取非活跃节点处理策略，默认“RECREATE”，即对于实例创建失败或异常退还的计算节点，定期重新创建实例资源。
 * @method void setActionIfComputeNodeInactive(string $ActionIfComputeNodeInactive) 设置非活跃节点处理策略，默认“RECREATE”，即对于实例创建失败或异常退还的计算节点，定期重新创建实例资源。
 * @method integer getResourceMaxRetryCount() 获取对于实例创建失败或异常退还的计算节点，定期重新创建实例资源的最大重试次数，最大值100，如果不设置的话，系统会设置一个默认值，当前为7。
 * @method void setResourceMaxRetryCount(integer $ResourceMaxRetryCount) 设置对于实例创建失败或异常退还的计算节点，定期重新创建实例资源的最大重试次数，最大值100，如果不设置的话，系统会设置一个默认值，当前为7。
 * @method array getTags() 获取标签列表。通过指定该参数可以支持绑定标签到黑石计算环境。每个黑石计算环境最多绑定10个标签。
 * @method void setTags(array $Tags) 设置标签列表。通过指定该参数可以支持绑定标签到黑石计算环境。每个黑石计算环境最多绑定10个标签。
 * @method string getNotificationTarget() 获取表示通知信息的通知目标类型。
取值范围：CMQ，TDMQ_CMQ。
CMQ:表示向腾讯云CMQ发送消息。
TDMQ_CMQ：表示向腾讯云TDMQ_CMQ发送消息。<br/>默认值为CMQ。<br/>注：腾讯云计划于2022年6月前正式下线消息队列 CMQ，建议使用TDMQ_CMQ。参考文档：[CMQ迁移到TDMQ_CMQ](https://cloud.tencent.com/document/product/406/60860)
 * @method void setNotificationTarget(string $NotificationTarget) 设置表示通知信息的通知目标类型。
取值范围：CMQ，TDMQ_CMQ。
CMQ:表示向腾讯云CMQ发送消息。
TDMQ_CMQ：表示向腾讯云TDMQ_CMQ发送消息。<br/>默认值为CMQ。<br/>注：腾讯云计划于2022年6月前正式下线消息队列 CMQ，建议使用TDMQ_CMQ。参考文档：[CMQ迁移到TDMQ_CMQ](https://cloud.tencent.com/document/product/406/60860)
 */
class NamedCpmComputeEnv extends AbstractModel
{
    /**
     * @var string 计算环境名称
     */
    public $EnvName;

    /**
     * @var EnvDataCpm 计算环境具体参数
     */
    public $EnvData;

    /**
     * @var integer 计算节点期望个数
     */
    public $DesiredComputeNodeCount;

    /**
     * @var string 计算环境描述
     */
    public $EnvDescription;

    /**
     * @var string 计算环境管理类型， 取值MANAGED。
     */
    public $EnvType;

    /**
     * @var array 授权信息
     */
    public $Authentications;

    /**
     * @var array 输入映射信息
     */
    public $InputMappings;

    /**
     * @var Notification 通知信息
     */
    public $Notifications;

    /**
     * @var string 非活跃节点处理策略，默认“RECREATE”，即对于实例创建失败或异常退还的计算节点，定期重新创建实例资源。
     */
    public $ActionIfComputeNodeInactive;

    /**
     * @var integer 对于实例创建失败或异常退还的计算节点，定期重新创建实例资源的最大重试次数，最大值100，如果不设置的话，系统会设置一个默认值，当前为7。
     */
    public $ResourceMaxRetryCount;

    /**
     * @var array 标签列表。通过指定该参数可以支持绑定标签到黑石计算环境。每个黑石计算环境最多绑定10个标签。
     */
    public $Tags;

    /**
     * @var string 表示通知信息的通知目标类型。
取值范围：CMQ，TDMQ_CMQ。
CMQ:表示向腾讯云CMQ发送消息。
TDMQ_CMQ：表示向腾讯云TDMQ_CMQ发送消息。<br/>默认值为CMQ。<br/>注：腾讯云计划于2022年6月前正式下线消息队列 CMQ，建议使用TDMQ_CMQ。参考文档：[CMQ迁移到TDMQ_CMQ](https://cloud.tencent.com/document/product/406/60860)
     */
    public $NotificationTarget;

    /**
     * @param string $EnvName 计算环境名称
     * @param EnvDataCpm $EnvData 计算环境具体参数
     * @param integer $DesiredComputeNodeCount 计算节点期望个数
     * @param string $EnvDescription 计算环境描述
     * @param string $EnvType 计算环境管理类型， 取值MANAGED。
     * @param array $Authentications 授权信息
     * @param array $InputMappings 输入映射信息
     * @param Notification $Notifications 通知信息
     * @param string $ActionIfComputeNodeInactive 非活跃节点处理策略，默认“RECREATE”，即对于实例创建失败或异常退还的计算节点，定期重新创建实例资源。
     * @param integer $ResourceMaxRetryCount 对于实例创建失败或异常退还的计算节点，定期重新创建实例资源的最大重试次数，最大值100，如果不设置的话，系统会设置一个默认值，当前为7。
     * @param array $Tags 标签列表。通过指定该参数可以支持绑定标签到黑石计算环境。每个黑石计算环境最多绑定10个标签。
     * @param string $NotificationTarget 表示通知信息的通知目标类型。
取值范围：CMQ，TDMQ_CMQ。
CMQ:表示向腾讯云CMQ发送消息。
TDMQ_CMQ：表示向腾讯云TDMQ_CMQ发送消息。<br/>默认值为CMQ。<br/>注：腾讯云计划于2022年6月前正式下线消息队列 CMQ，建议使用TDMQ_CMQ。参考文档：[CMQ迁移到TDMQ_CMQ](https://cloud.tencent.com/document/product/406/60860)
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("EnvName",$param) and $param["EnvName"] !== null) {
            $this->EnvName = $param["EnvName"];
        }

        if (array_key_exists("EnvData",$param) and $param["EnvData"] !== null) {
            $this->EnvData = new EnvDataCpm();
            $this->EnvData->deserialize($param["EnvData"]);
        }

        if (array_key_exists("DesiredComputeNodeCount",$param) and $param["DesiredComputeNodeCount"] !== null) {
            $this->DesiredComputeNodeCount = $param["DesiredComputeNodeCount"];
        }

        if (array_key_exists("EnvDescription",$param) and $param["EnvDescription"] !== null) {
            $this->EnvDescription = $param["EnvDescription"];
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("Authentications",$param) and $param["Authentications"] !== null) {
            $this->Authentications = [];
            foreach ($param["Authentications"] as $key => $value){
                $obj = new Authentication();
                $obj->deserialize($value);
                array_push($this->Authentications, $obj);
            }
        }

        if (array_key_exists("InputMappings",$param) and $param["InputMappings"] !== null) {
            $this->InputMappings = [];
            foreach ($param["InputMappings"] as $key => $value){
                $obj = new InputMapping();
                $obj->deserialize($value);
                array_push($this->InputMappings, $obj);
            }
        }

        if (array_key_exists("Notifications",$param) and $param["Notifications"] !== null) {
            $this->Notifications = new Notification();
            $this->Notifications->deserialize($param["Notifications"]);
        }

        if (array_key_exists("ActionIfComputeNodeInactive",$param) and $param["ActionIfComputeNodeInactive"] !== null) {
            $this->ActionIfComputeNodeInactive = $param["ActionIfComputeNodeInactive"];
        }

        if (array_key_exists("ResourceMaxRetryCount",$param) and $param["ResourceMaxRetryCount"] !== null) {
            $this->ResourceMaxRetryCount = $param["ResourceMaxRetryCount"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("NotificationTarget",$param) and $param["NotificationTarget"] !== null) {
            $this->NotificationTarget = $param["NotificationTarget"];
        }
    }
}
