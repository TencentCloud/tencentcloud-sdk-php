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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * opa策略信息
 *
 * @method string getPolicyCategory() 获取策略分类：cluster集群策略、node节点策略、namespace命名空间策略、configuration配置相关策略、compute计算资源策略、storage存储资源策略、network网络资源策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyCategory(string $PolicyCategory) 设置策略分类：cluster集群策略、node节点策略、namespace命名空间策略、configuration配置相关策略、compute计算资源策略、storage存储资源策略、network网络资源策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyName() 获取策略中文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyName(string $PolicyName) 设置策略中文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPolicyDesc() 获取策略描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyDesc(string $PolicyDesc) 设置策略描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnforcementAction() 获取策略运行模式：dryrun空跑不生效，deny拦截生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnforcementAction(string $EnforcementAction) 设置策略运行模式：dryrun空跑不生效，deny拦截生效
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEventNums() 获取关联的事件数量(最近7d)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEventNums(integer $EventNums) 设置关联的事件数量(最近7d)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取策略英文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置策略英文名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKind() 获取策略模版类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKind(string $Kind) 设置策略模版类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEnabledStatus() 获取策略开关状态：open打开，close关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnabledStatus(string $EnabledStatus) 设置策略开关状态：open打开，close关闭
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConstraintYamlExample() 获取策略的实例的yaml示例base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConstraintYamlExample(string $ConstraintYamlExample) 设置策略的实例的yaml示例base64编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getOpenConstraintInfoList() 获取策略关联的实例列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenConstraintInfoList(array $OpenConstraintInfoList) 设置策略关联的实例列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class OpenPolicyInfo extends AbstractModel
{
    /**
     * @var string 策略分类：cluster集群策略、node节点策略、namespace命名空间策略、configuration配置相关策略、compute计算资源策略、storage存储资源策略、network网络资源策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyCategory;

    /**
     * @var string 策略中文名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyName;

    /**
     * @var string 策略描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyDesc;

    /**
     * @var string 策略运行模式：dryrun空跑不生效，deny拦截生效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnforcementAction;

    /**
     * @var integer 关联的事件数量(最近7d)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EventNums;

    /**
     * @var string 策略英文名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 策略模版类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Kind;

    /**
     * @var string 策略开关状态：open打开，close关闭
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnabledStatus;

    /**
     * @var string 策略的实例的yaml示例base64编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConstraintYamlExample;

    /**
     * @var array 策略关联的实例列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenConstraintInfoList;

    /**
     * @param string $PolicyCategory 策略分类：cluster集群策略、node节点策略、namespace命名空间策略、configuration配置相关策略、compute计算资源策略、storage存储资源策略、network网络资源策略
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyName 策略中文名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PolicyDesc 策略描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnforcementAction 策略运行模式：dryrun空跑不生效，deny拦截生效
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EventNums 关联的事件数量(最近7d)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 策略英文名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Kind 策略模版类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EnabledStatus 策略开关状态：open打开，close关闭
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConstraintYamlExample 策略的实例的yaml示例base64编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $OpenConstraintInfoList 策略关联的实例列表
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("PolicyCategory",$param) and $param["PolicyCategory"] !== null) {
            $this->PolicyCategory = $param["PolicyCategory"];
        }

        if (array_key_exists("PolicyName",$param) and $param["PolicyName"] !== null) {
            $this->PolicyName = $param["PolicyName"];
        }

        if (array_key_exists("PolicyDesc",$param) and $param["PolicyDesc"] !== null) {
            $this->PolicyDesc = $param["PolicyDesc"];
        }

        if (array_key_exists("EnforcementAction",$param) and $param["EnforcementAction"] !== null) {
            $this->EnforcementAction = $param["EnforcementAction"];
        }

        if (array_key_exists("EventNums",$param) and $param["EventNums"] !== null) {
            $this->EventNums = $param["EventNums"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("EnabledStatus",$param) and $param["EnabledStatus"] !== null) {
            $this->EnabledStatus = $param["EnabledStatus"];
        }

        if (array_key_exists("ConstraintYamlExample",$param) and $param["ConstraintYamlExample"] !== null) {
            $this->ConstraintYamlExample = $param["ConstraintYamlExample"];
        }

        if (array_key_exists("OpenConstraintInfoList",$param) and $param["OpenConstraintInfoList"] !== null) {
            $this->OpenConstraintInfoList = [];
            foreach ($param["OpenConstraintInfoList"] as $key => $value){
                $obj = new OpenConstraintInfo();
                $obj->deserialize($value);
                array_push($this->OpenConstraintInfoList, $obj);
            }
        }
    }
}
