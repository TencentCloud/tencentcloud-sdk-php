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
 * DescribePolicyGroupInfo返回参数结构体
 *
 * @method string getGroupName() 获取<p>策略组名称</p>
 * @method void setGroupName(string $GroupName) 设置<p>策略组名称</p>
 * @method integer getProjectId() 获取<p>策略组所属的项目id</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>策略组所属的项目id</p>
 * @method integer getIsDefault() 获取<p>是否为默认策略，0表示非默认策略，1表示默认策略</p>
 * @method void setIsDefault(integer $IsDefault) 设置<p>是否为默认策略，0表示非默认策略，1表示默认策略</p>
 * @method string getViewName() 获取<p>策略类型</p>
 * @method void setViewName(string $ViewName) 设置<p>策略类型</p>
 * @method string getRemark() 获取<p>策略说明</p>
 * @method void setRemark(string $Remark) 设置<p>策略说明</p>
 * @method string getShowName() 获取<p>策略类型名称</p>
 * @method void setShowName(string $ShowName) 设置<p>策略类型名称</p>
 * @method string getLastEditUin() 获取<p>最近编辑的用户uin</p>
 * @method void setLastEditUin(string $LastEditUin) 设置<p>最近编辑的用户uin</p>
 * @method string getUpdateTime() 获取<p>最近编辑时间</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>最近编辑时间</p>
 * @method array getRegion() 获取<p>该策略支持的地域</p>
 * @method void setRegion(array $Region) 设置<p>该策略支持的地域</p>
 * @method array getDimensionGroup() 获取<p>策略类型的维度列表</p>
 * @method void setDimensionGroup(array $DimensionGroup) 设置<p>策略类型的维度列表</p>
 * @method array getConditionsConfig() 获取<p>阈值规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionsConfig(array $ConditionsConfig) 设置<p>阈值规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEventConfig() 获取<p>产品事件规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventConfig(array $EventConfig) 设置<p>产品事件规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceiverInfos() 获取<p>用户接收人列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverInfos(array $ReceiverInfos) 设置<p>用户接收人列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribePolicyGroupInfoCallback getCallback() 获取<p>用户回调信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCallback(DescribePolicyGroupInfoCallback $Callback) 设置<p>用户回调信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method DescribePolicyGroupInfoConditionTpl getConditionsTemp() 获取<p>模板策略组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConditionsTemp(DescribePolicyGroupInfoConditionTpl $ConditionsTemp) 设置<p>模板策略组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCanSetDefault() 获取<p>是否可以设置成默认策略</p>
 * @method void setCanSetDefault(boolean $CanSetDefault) 设置<p>是否可以设置成默认策略</p>
 * @method integer getIsUnionRule() 获取<p>是否且规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUnionRule(integer $IsUnionRule) 设置<p>是否且规则</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePolicyGroupInfoResponse extends AbstractModel
{
    /**
     * @var string <p>策略组名称</p>
     */
    public $GroupName;

    /**
     * @var integer <p>策略组所属的项目id</p>
     */
    public $ProjectId;

    /**
     * @var integer <p>是否为默认策略，0表示非默认策略，1表示默认策略</p>
     */
    public $IsDefault;

    /**
     * @var string <p>策略类型</p>
     */
    public $ViewName;

    /**
     * @var string <p>策略说明</p>
     */
    public $Remark;

    /**
     * @var string <p>策略类型名称</p>
     */
    public $ShowName;

    /**
     * @var string <p>最近编辑的用户uin</p>
     */
    public $LastEditUin;

    /**
     * @var string <p>最近编辑时间</p>
     */
    public $UpdateTime;

    /**
     * @var array <p>该策略支持的地域</p>
     */
    public $Region;

    /**
     * @var array <p>策略类型的维度列表</p>
     */
    public $DimensionGroup;

    /**
     * @var array <p>阈值规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionsConfig;

    /**
     * @var array <p>产品事件规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventConfig;

    /**
     * @var array <p>用户接收人列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverInfos;

    /**
     * @var DescribePolicyGroupInfoCallback <p>用户回调信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Callback;

    /**
     * @var DescribePolicyGroupInfoConditionTpl <p>模板策略组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConditionsTemp;

    /**
     * @var boolean <p>是否可以设置成默认策略</p>
     */
    public $CanSetDefault;

    /**
     * @var integer <p>是否且规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUnionRule;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $GroupName <p>策略组名称</p>
     * @param integer $ProjectId <p>策略组所属的项目id</p>
     * @param integer $IsDefault <p>是否为默认策略，0表示非默认策略，1表示默认策略</p>
     * @param string $ViewName <p>策略类型</p>
     * @param string $Remark <p>策略说明</p>
     * @param string $ShowName <p>策略类型名称</p>
     * @param string $LastEditUin <p>最近编辑的用户uin</p>
     * @param string $UpdateTime <p>最近编辑时间</p>
     * @param array $Region <p>该策略支持的地域</p>
     * @param array $DimensionGroup <p>策略类型的维度列表</p>
     * @param array $ConditionsConfig <p>阈值规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $EventConfig <p>产品事件规则列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReceiverInfos <p>用户接收人列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribePolicyGroupInfoCallback $Callback <p>用户回调信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param DescribePolicyGroupInfoConditionTpl $ConditionsTemp <p>模板策略组</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CanSetDefault <p>是否可以设置成默认策略</p>
     * @param integer $IsUnionRule <p>是否且规则</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("ViewName",$param) and $param["ViewName"] !== null) {
            $this->ViewName = $param["ViewName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ShowName",$param) and $param["ShowName"] !== null) {
            $this->ShowName = $param["ShowName"];
        }

        if (array_key_exists("LastEditUin",$param) and $param["LastEditUin"] !== null) {
            $this->LastEditUin = $param["LastEditUin"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("DimensionGroup",$param) and $param["DimensionGroup"] !== null) {
            $this->DimensionGroup = $param["DimensionGroup"];
        }

        if (array_key_exists("ConditionsConfig",$param) and $param["ConditionsConfig"] !== null) {
            $this->ConditionsConfig = [];
            foreach ($param["ConditionsConfig"] as $key => $value){
                $obj = new DescribePolicyGroupInfoCondition();
                $obj->deserialize($value);
                array_push($this->ConditionsConfig, $obj);
            }
        }

        if (array_key_exists("EventConfig",$param) and $param["EventConfig"] !== null) {
            $this->EventConfig = [];
            foreach ($param["EventConfig"] as $key => $value){
                $obj = new DescribePolicyGroupInfoEventCondition();
                $obj->deserialize($value);
                array_push($this->EventConfig, $obj);
            }
        }

        if (array_key_exists("ReceiverInfos",$param) and $param["ReceiverInfos"] !== null) {
            $this->ReceiverInfos = [];
            foreach ($param["ReceiverInfos"] as $key => $value){
                $obj = new DescribePolicyGroupInfoReceiverInfo();
                $obj->deserialize($value);
                array_push($this->ReceiverInfos, $obj);
            }
        }

        if (array_key_exists("Callback",$param) and $param["Callback"] !== null) {
            $this->Callback = new DescribePolicyGroupInfoCallback();
            $this->Callback->deserialize($param["Callback"]);
        }

        if (array_key_exists("ConditionsTemp",$param) and $param["ConditionsTemp"] !== null) {
            $this->ConditionsTemp = new DescribePolicyGroupInfoConditionTpl();
            $this->ConditionsTemp->deserialize($param["ConditionsTemp"]);
        }

        if (array_key_exists("CanSetDefault",$param) and $param["CanSetDefault"] !== null) {
            $this->CanSetDefault = $param["CanSetDefault"];
        }

        if (array_key_exists("IsUnionRule",$param) and $param["IsUnionRule"] !== null) {
            $this->IsUnionRule = $param["IsUnionRule"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
