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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * saas和clb信息
 *
 * @method integer getAppid() 获取用户id
 * @method void setAppid(integer $Appid) 设置用户id
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getDomainId() 获取域名id
 * @method void setDomainId(string $DomainId) 设置域名id
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method string getEdition() 获取waf类型
 * @method void setEdition(string $Edition) 设置waf类型
 * @method string getLevel() 获取版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLevel(string $Level) 设置版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getWriteConfig() 获取指定域名访问日志字段的开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWriteConfig(string $WriteConfig) 设置指定域名访问日志字段的开关
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCls() 获取指定域名是否写cls的开关 1:写 0:不写
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCls(integer $Cls) 设置指定域名是否写cls的开关 1:写 0:不写
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCloudType() 获取标记是否是混合云接入。hybrid表示混合云接入域名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCloudType(string $CloudType) 设置标记是否是混合云接入。hybrid表示混合云接入域名
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserDomainInfo extends AbstractModel
{
    /**
     * @var integer 用户id
     */
    public $Appid;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 域名id
     */
    public $DomainId;

    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var string waf类型
     */
    public $Edition;

    /**
     * @var string 版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Level;

    /**
     * @var string 指定域名访问日志字段的开关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WriteConfig;

    /**
     * @var integer 指定域名是否写cls的开关 1:写 0:不写
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cls;

    /**
     * @var string 标记是否是混合云接入。hybrid表示混合云接入域名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CloudType;

    /**
     * @param integer $Appid 用户id
     * @param string $Domain 域名
     * @param string $DomainId 域名id
     * @param string $InstanceId 实例id
     * @param string $InstanceName 实例名
     * @param string $Edition waf类型
     * @param string $Level 版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $WriteConfig 指定域名访问日志字段的开关
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Cls 指定域名是否写cls的开关 1:写 0:不写
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CloudType 标记是否是混合云接入。hybrid表示混合云接入域名
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
        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainId",$param) and $param["DomainId"] !== null) {
            $this->DomainId = $param["DomainId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Edition",$param) and $param["Edition"] !== null) {
            $this->Edition = $param["Edition"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("WriteConfig",$param) and $param["WriteConfig"] !== null) {
            $this->WriteConfig = $param["WriteConfig"];
        }

        if (array_key_exists("Cls",$param) and $param["Cls"] !== null) {
            $this->Cls = $param["Cls"];
        }

        if (array_key_exists("CloudType",$param) and $param["CloudType"] !== null) {
            $this->CloudType = $param["CloudType"];
        }
    }
}
