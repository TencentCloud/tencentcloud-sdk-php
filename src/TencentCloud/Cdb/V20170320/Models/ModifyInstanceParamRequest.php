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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceParam请求参数结构体
 *
 * @method array getInstanceIds() 获取实例短 ID 列表。
 * @method void setInstanceIds(array $InstanceIds) 设置实例短 ID 列表。
 * @method array getParamList() 获取要修改的参数列表。每一个元素是 Name 和 CurrentValue 的组合。Name 是参数名，CurrentValue 是要修改成的值。
 * @method void setParamList(array $ParamList) 设置要修改的参数列表。每一个元素是 Name 和 CurrentValue 的组合。Name 是参数名，CurrentValue 是要修改成的值。
 * @method integer getTemplateId() 获取模板id，ParamList和TemplateId必须至少传其中之一
 * @method void setTemplateId(integer $TemplateId) 设置模板id，ParamList和TemplateId必须至少传其中之一
 * @method integer getWaitSwitch() 获取执行参数调整任务的方式，默认为 0。支持值包括：0 - 立刻执行，1 - 时间窗执行；当该值为 1 时，每次只能传一个实例（InstanceIds数量为1）
 * @method void setWaitSwitch(integer $WaitSwitch) 设置执行参数调整任务的方式，默认为 0。支持值包括：0 - 立刻执行，1 - 时间窗执行；当该值为 1 时，每次只能传一个实例（InstanceIds数量为1）
 * @method boolean getNotSyncRo() 获取参数是否同步到主实例下的只读实例。true 为不同步，false 为同步。默认为 false。
 * @method void setNotSyncRo(boolean $NotSyncRo) 设置参数是否同步到主实例下的只读实例。true 为不同步，false 为同步。默认为 false。
 * @method boolean getNotSyncDr() 获取参数是否同步到主实例下的灾备实例。true 为不同步，false 为同步。默认为 false。
 * @method void setNotSyncDr(boolean $NotSyncDr) 设置参数是否同步到主实例下的灾备实例。true 为不同步，false 为同步。默认为 false。
 */
class ModifyInstanceParamRequest extends AbstractModel
{
    /**
     * @var array 实例短 ID 列表。
     */
    public $InstanceIds;

    /**
     * @var array 要修改的参数列表。每一个元素是 Name 和 CurrentValue 的组合。Name 是参数名，CurrentValue 是要修改成的值。
     */
    public $ParamList;

    /**
     * @var integer 模板id，ParamList和TemplateId必须至少传其中之一
     */
    public $TemplateId;

    /**
     * @var integer 执行参数调整任务的方式，默认为 0。支持值包括：0 - 立刻执行，1 - 时间窗执行；当该值为 1 时，每次只能传一个实例（InstanceIds数量为1）
     */
    public $WaitSwitch;

    /**
     * @var boolean 参数是否同步到主实例下的只读实例。true 为不同步，false 为同步。默认为 false。
     */
    public $NotSyncRo;

    /**
     * @var boolean 参数是否同步到主实例下的灾备实例。true 为不同步，false 为同步。默认为 false。
     */
    public $NotSyncDr;

    /**
     * @param array $InstanceIds 实例短 ID 列表。
     * @param array $ParamList 要修改的参数列表。每一个元素是 Name 和 CurrentValue 的组合。Name 是参数名，CurrentValue 是要修改成的值。
     * @param integer $TemplateId 模板id，ParamList和TemplateId必须至少传其中之一
     * @param integer $WaitSwitch 执行参数调整任务的方式，默认为 0。支持值包括：0 - 立刻执行，1 - 时间窗执行；当该值为 1 时，每次只能传一个实例（InstanceIds数量为1）
     * @param boolean $NotSyncRo 参数是否同步到主实例下的只读实例。true 为不同步，false 为同步。默认为 false。
     * @param boolean $NotSyncDr 参数是否同步到主实例下的灾备实例。true 为不同步，false 为同步。默认为 false。
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new Parameter();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("WaitSwitch",$param) and $param["WaitSwitch"] !== null) {
            $this->WaitSwitch = $param["WaitSwitch"];
        }

        if (array_key_exists("NotSyncRo",$param) and $param["NotSyncRo"] !== null) {
            $this->NotSyncRo = $param["NotSyncRo"];
        }

        if (array_key_exists("NotSyncDr",$param) and $param["NotSyncDr"] !== null) {
            $this->NotSyncDr = $param["NotSyncDr"];
        }
    }
}
