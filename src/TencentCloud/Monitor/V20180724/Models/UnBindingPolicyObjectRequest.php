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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnBindingPolicyObject请求参数结构体
 *
 * @method string getModule() 获取固定值，为"monitor"
 * @method void setModule(string $Module) 设置固定值，为"monitor"
 * @method integer getGroupId() 获取策略组id，如传入 PolicyId 则该字段被忽略可传入任意值如 0
 * @method void setGroupId(integer $GroupId) 设置策略组id，如传入 PolicyId 则该字段被忽略可传入任意值如 0
 * @method array getUniqueId() 获取待删除对象实例的唯一id列表，UniqueId从调用[获取已绑定对象列表接口](https://cloud.tencent.com/document/api/248/40570)的出参的List中得到
 * @method void setUniqueId(array $UniqueId) 设置待删除对象实例的唯一id列表，UniqueId从调用[获取已绑定对象列表接口](https://cloud.tencent.com/document/api/248/40570)的出参的List中得到
 * @method integer getInstanceGroupId() 获取实例分组id，如果按实例分组删除的话UniqueId参数是无效的
 * @method void setInstanceGroupId(integer $InstanceGroupId) 设置实例分组id，如果按实例分组删除的话UniqueId参数是无效的
 * @method string getPolicyId() 获取告警策略ID，使用此字段时 GroupId 会被忽略
 * @method void setPolicyId(string $PolicyId) 设置告警策略ID，使用此字段时 GroupId 会被忽略
 * @method string getEbSubject() 获取事件配置的告警
 * @method void setEbSubject(string $EbSubject) 设置事件配置的告警
 * @method integer getEbEventFlag() 获取是否配置了事件告警
 * @method void setEbEventFlag(integer $EbEventFlag) 设置是否配置了事件告警
 */
class UnBindingPolicyObjectRequest extends AbstractModel
{
    /**
     * @var string 固定值，为"monitor"
     */
    public $Module;

    /**
     * @var integer 策略组id，如传入 PolicyId 则该字段被忽略可传入任意值如 0
     */
    public $GroupId;

    /**
     * @var array 待删除对象实例的唯一id列表，UniqueId从调用[获取已绑定对象列表接口](https://cloud.tencent.com/document/api/248/40570)的出参的List中得到
     */
    public $UniqueId;

    /**
     * @var integer 实例分组id，如果按实例分组删除的话UniqueId参数是无效的
     */
    public $InstanceGroupId;

    /**
     * @var string 告警策略ID，使用此字段时 GroupId 会被忽略
     */
    public $PolicyId;

    /**
     * @var string 事件配置的告警
     */
    public $EbSubject;

    /**
     * @var integer 是否配置了事件告警
     */
    public $EbEventFlag;

    /**
     * @param string $Module 固定值，为"monitor"
     * @param integer $GroupId 策略组id，如传入 PolicyId 则该字段被忽略可传入任意值如 0
     * @param array $UniqueId 待删除对象实例的唯一id列表，UniqueId从调用[获取已绑定对象列表接口](https://cloud.tencent.com/document/api/248/40570)的出参的List中得到
     * @param integer $InstanceGroupId 实例分组id，如果按实例分组删除的话UniqueId参数是无效的
     * @param string $PolicyId 告警策略ID，使用此字段时 GroupId 会被忽略
     * @param string $EbSubject 事件配置的告警
     * @param integer $EbEventFlag 是否配置了事件告警
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
        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("UniqueId",$param) and $param["UniqueId"] !== null) {
            $this->UniqueId = $param["UniqueId"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("EbSubject",$param) and $param["EbSubject"] !== null) {
            $this->EbSubject = $param["EbSubject"];
        }

        if (array_key_exists("EbEventFlag",$param) and $param["EbEventFlag"] !== null) {
            $this->EbEventFlag = $param["EbEventFlag"];
        }
    }
}
