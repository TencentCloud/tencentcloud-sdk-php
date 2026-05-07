<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * BindingPolicyObject请求参数结构体
 *
 * @method string getModule() 获取<p>必填。固定值&quot;monitor&quot;</p>
 * @method void setModule(string $Module) 设置<p>必填。固定值&quot;monitor&quot;</p>
 * @method integer getGroupId() 获取<p>策略组id，例如 4739573。逐渐弃用，建议使用 PolicyId 参数</p>
 * @method void setGroupId(integer $GroupId) 设置<p>策略组id，例如 4739573。逐渐弃用，建议使用 PolicyId 参数</p>
 * @method string getPolicyId() 获取<p>告警策略ID，例如“policy-gh892hg0”。PolicyId 参数与 GroupId 参数至少要填一个，否则会报参数错误，建议使用该参数。若两者同时存在则以该参数为准</p>
 * @method void setPolicyId(string $PolicyId) 设置<p>告警策略ID，例如“policy-gh892hg0”。PolicyId 参数与 GroupId 参数至少要填一个，否则会报参数错误，建议使用该参数。若两者同时存在则以该参数为准</p>
 * @method integer getInstanceGroupId() 获取<p>实例分组ID</p>
 * @method void setInstanceGroupId(integer $InstanceGroupId) 设置<p>实例分组ID</p>
 * @method array getDimensions() 获取<p>需要绑定的对象维度信息。当告警对象选择为实例绑定方式时，该参数为必填参数；当告警对象选择为标签绑定、实例分组方式时，该参数为选填参数。</p>
 * @method void setDimensions(array $Dimensions) 设置<p>需要绑定的对象维度信息。当告警对象选择为实例绑定方式时，该参数为必填参数；当告警对象选择为标签绑定、实例分组方式时，该参数为选填参数。</p>
 * @method string getEbSubject() 获取<p>事件配置的告警</p>
 * @method void setEbSubject(string $EbSubject) 设置<p>事件配置的告警</p>
 * @method integer getEbEventFlag() 获取<p>是否配置了事件告警</p>
 * @method void setEbEventFlag(integer $EbEventFlag) 设置<p>是否配置了事件告警</p>
 */
class BindingPolicyObjectRequest extends AbstractModel
{
    /**
     * @var string <p>必填。固定值&quot;monitor&quot;</p>
     */
    public $Module;

    /**
     * @var integer <p>策略组id，例如 4739573。逐渐弃用，建议使用 PolicyId 参数</p>
     */
    public $GroupId;

    /**
     * @var string <p>告警策略ID，例如“policy-gh892hg0”。PolicyId 参数与 GroupId 参数至少要填一个，否则会报参数错误，建议使用该参数。若两者同时存在则以该参数为准</p>
     */
    public $PolicyId;

    /**
     * @var integer <p>实例分组ID</p>
     */
    public $InstanceGroupId;

    /**
     * @var array <p>需要绑定的对象维度信息。当告警对象选择为实例绑定方式时，该参数为必填参数；当告警对象选择为标签绑定、实例分组方式时，该参数为选填参数。</p>
     */
    public $Dimensions;

    /**
     * @var string <p>事件配置的告警</p>
     */
    public $EbSubject;

    /**
     * @var integer <p>是否配置了事件告警</p>
     */
    public $EbEventFlag;

    /**
     * @param string $Module <p>必填。固定值&quot;monitor&quot;</p>
     * @param integer $GroupId <p>策略组id，例如 4739573。逐渐弃用，建议使用 PolicyId 参数</p>
     * @param string $PolicyId <p>告警策略ID，例如“policy-gh892hg0”。PolicyId 参数与 GroupId 参数至少要填一个，否则会报参数错误，建议使用该参数。若两者同时存在则以该参数为准</p>
     * @param integer $InstanceGroupId <p>实例分组ID</p>
     * @param array $Dimensions <p>需要绑定的对象维度信息。当告警对象选择为实例绑定方式时，该参数为必填参数；当告警对象选择为标签绑定、实例分组方式时，该参数为选填参数。</p>
     * @param string $EbSubject <p>事件配置的告警</p>
     * @param integer $EbEventFlag <p>是否配置了事件告警</p>
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

        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("InstanceGroupId",$param) and $param["InstanceGroupId"] !== null) {
            $this->InstanceGroupId = $param["InstanceGroupId"];
        }

        if (array_key_exists("Dimensions",$param) and $param["Dimensions"] !== null) {
            $this->Dimensions = [];
            foreach ($param["Dimensions"] as $key => $value){
                $obj = new BindingPolicyObjectDimension();
                $obj->deserialize($value);
                array_push($this->Dimensions, $obj);
            }
        }

        if (array_key_exists("EbSubject",$param) and $param["EbSubject"] !== null) {
            $this->EbSubject = $param["EbSubject"];
        }

        if (array_key_exists("EbEventFlag",$param) and $param["EbEventFlag"] !== null) {
            $this->EbEventFlag = $param["EbEventFlag"];
        }
    }
}
