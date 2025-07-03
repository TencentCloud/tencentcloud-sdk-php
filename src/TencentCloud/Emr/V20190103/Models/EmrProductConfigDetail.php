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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EMR产品配置
 *
 * @method array getSoftInfo() 获取软件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSoftInfo(array $SoftInfo) 设置软件信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMasterNodeSize() 获取Master节点个数
 * @method void setMasterNodeSize(integer $MasterNodeSize) 设置Master节点个数
 * @method integer getCoreNodeSize() 获取Core节点个数
 * @method void setCoreNodeSize(integer $CoreNodeSize) 设置Core节点个数
 * @method integer getTaskNodeSize() 获取Task节点个数
 * @method void setTaskNodeSize(integer $TaskNodeSize) 设置Task节点个数
 * @method integer getComNodeSize() 获取Common节点个数
 * @method void setComNodeSize(integer $ComNodeSize) 设置Common节点个数
 * @method ResourceDetail getMasterResource() 获取Master节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterResource(ResourceDetail $MasterResource) 设置Master节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceDetail getCoreResource() 获取Core节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCoreResource(ResourceDetail $CoreResource) 设置Core节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceDetail getTaskResource() 获取Task节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskResource(ResourceDetail $TaskResource) 设置Task节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method ResourceDetail getComResource() 获取Common节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComResource(ResourceDetail $ComResource) 设置Common节点资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getOnCos() 获取是否使用COS
 * @method void setOnCos(boolean $OnCos) 设置是否使用COS
 * @method integer getChargeType() 获取收费类型
 * @method void setChargeType(integer $ChargeType) 设置收费类型
 * @method integer getRouterNodeSize() 获取Router节点个数
 * @method void setRouterNodeSize(integer $RouterNodeSize) 设置Router节点个数
 * @method boolean getSupportHA() 获取是否支持HA
 * @method void setSupportHA(boolean $SupportHA) 设置是否支持HA
 * @method boolean getSecurityOn() 获取是否支持安全模式
 * @method void setSecurityOn(boolean $SecurityOn) 设置是否支持安全模式
 * @method string getSecurityGroup() 获取安全组名称
 * @method void setSecurityGroup(string $SecurityGroup) 设置安全组名称
 * @method integer getCbsEncrypt() 获取是否开启Cbs加密
 * @method void setCbsEncrypt(integer $CbsEncrypt) 设置是否开启Cbs加密
 * @method string getApplicationRole() 获取自定义应用角色。
 * @method void setApplicationRole(string $ApplicationRole) 设置自定义应用角色。
 * @method array getSecurityGroups() 获取安全组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityGroups(array $SecurityGroups) 设置安全组
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicKeyId() 获取SSH密钥Id
 * @method void setPublicKeyId(string $PublicKeyId) 设置SSH密钥Id
 */
class EmrProductConfigDetail extends AbstractModel
{
    /**
     * @var array 软件信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SoftInfo;

    /**
     * @var integer Master节点个数
     */
    public $MasterNodeSize;

    /**
     * @var integer Core节点个数
     */
    public $CoreNodeSize;

    /**
     * @var integer Task节点个数
     */
    public $TaskNodeSize;

    /**
     * @var integer Common节点个数
     */
    public $ComNodeSize;

    /**
     * @var ResourceDetail Master节点资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterResource;

    /**
     * @var ResourceDetail Core节点资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CoreResource;

    /**
     * @var ResourceDetail Task节点资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskResource;

    /**
     * @var ResourceDetail Common节点资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComResource;

    /**
     * @var boolean 是否使用COS
     */
    public $OnCos;

    /**
     * @var integer 收费类型
     */
    public $ChargeType;

    /**
     * @var integer Router节点个数
     */
    public $RouterNodeSize;

    /**
     * @var boolean 是否支持HA
     */
    public $SupportHA;

    /**
     * @var boolean 是否支持安全模式
     */
    public $SecurityOn;

    /**
     * @var string 安全组名称
     */
    public $SecurityGroup;

    /**
     * @var integer 是否开启Cbs加密
     */
    public $CbsEncrypt;

    /**
     * @var string 自定义应用角色。
     */
    public $ApplicationRole;

    /**
     * @var array 安全组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityGroups;

    /**
     * @var string SSH密钥Id
     */
    public $PublicKeyId;

    /**
     * @param array $SoftInfo 软件信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MasterNodeSize Master节点个数
     * @param integer $CoreNodeSize Core节点个数
     * @param integer $TaskNodeSize Task节点个数
     * @param integer $ComNodeSize Common节点个数
     * @param ResourceDetail $MasterResource Master节点资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceDetail $CoreResource Core节点资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceDetail $TaskResource Task节点资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param ResourceDetail $ComResource Common节点资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $OnCos 是否使用COS
     * @param integer $ChargeType 收费类型
     * @param integer $RouterNodeSize Router节点个数
     * @param boolean $SupportHA 是否支持HA
     * @param boolean $SecurityOn 是否支持安全模式
     * @param string $SecurityGroup 安全组名称
     * @param integer $CbsEncrypt 是否开启Cbs加密
     * @param string $ApplicationRole 自定义应用角色。
     * @param array $SecurityGroups 安全组
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicKeyId SSH密钥Id
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
        if (array_key_exists("SoftInfo",$param) and $param["SoftInfo"] !== null) {
            $this->SoftInfo = $param["SoftInfo"];
        }

        if (array_key_exists("MasterNodeSize",$param) and $param["MasterNodeSize"] !== null) {
            $this->MasterNodeSize = $param["MasterNodeSize"];
        }

        if (array_key_exists("CoreNodeSize",$param) and $param["CoreNodeSize"] !== null) {
            $this->CoreNodeSize = $param["CoreNodeSize"];
        }

        if (array_key_exists("TaskNodeSize",$param) and $param["TaskNodeSize"] !== null) {
            $this->TaskNodeSize = $param["TaskNodeSize"];
        }

        if (array_key_exists("ComNodeSize",$param) and $param["ComNodeSize"] !== null) {
            $this->ComNodeSize = $param["ComNodeSize"];
        }

        if (array_key_exists("MasterResource",$param) and $param["MasterResource"] !== null) {
            $this->MasterResource = new ResourceDetail();
            $this->MasterResource->deserialize($param["MasterResource"]);
        }

        if (array_key_exists("CoreResource",$param) and $param["CoreResource"] !== null) {
            $this->CoreResource = new ResourceDetail();
            $this->CoreResource->deserialize($param["CoreResource"]);
        }

        if (array_key_exists("TaskResource",$param) and $param["TaskResource"] !== null) {
            $this->TaskResource = new ResourceDetail();
            $this->TaskResource->deserialize($param["TaskResource"]);
        }

        if (array_key_exists("ComResource",$param) and $param["ComResource"] !== null) {
            $this->ComResource = new ResourceDetail();
            $this->ComResource->deserialize($param["ComResource"]);
        }

        if (array_key_exists("OnCos",$param) and $param["OnCos"] !== null) {
            $this->OnCos = $param["OnCos"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("RouterNodeSize",$param) and $param["RouterNodeSize"] !== null) {
            $this->RouterNodeSize = $param["RouterNodeSize"];
        }

        if (array_key_exists("SupportHA",$param) and $param["SupportHA"] !== null) {
            $this->SupportHA = $param["SupportHA"];
        }

        if (array_key_exists("SecurityOn",$param) and $param["SecurityOn"] !== null) {
            $this->SecurityOn = $param["SecurityOn"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("CbsEncrypt",$param) and $param["CbsEncrypt"] !== null) {
            $this->CbsEncrypt = $param["CbsEncrypt"];
        }

        if (array_key_exists("ApplicationRole",$param) and $param["ApplicationRole"] !== null) {
            $this->ApplicationRole = $param["ApplicationRole"];
        }

        if (array_key_exists("SecurityGroups",$param) and $param["SecurityGroups"] !== null) {
            $this->SecurityGroups = $param["SecurityGroups"];
        }

        if (array_key_exists("PublicKeyId",$param) and $param["PublicKeyId"] !== null) {
            $this->PublicKeyId = $param["PublicKeyId"];
        }
    }
}
