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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例详情
 *
 * @method integer getAppId() 获取appId。
 * @method void setAppId(integer $AppId) 设置appId。
 * @method integer getAuditStatus() 获取审计状态，0-未开通审计；1-已开通审计。
 * @method void setAuditStatus(integer $AuditStatus) 设置审计状态，0-未开通审计；1-已开通审计。
 * @method string getInstanceId() 获取实例Id。
 * @method void setInstanceId(string $InstanceId) 设置实例Id。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method integer getProjectId() 获取项目Id。
 * @method void setProjectId(integer $ProjectId) 设置项目Id。
 * @method string getRegion() 获取实例所在地域。
 * @method void setRegion(string $Region) 设置实例所在地域。
 * @method array getResourceTags() 获取资源Tags。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceTags(array $ResourceTags) 设置资源Tags。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AuditInstanceInfo extends AbstractModel
{
    /**
     * @var integer appId。
     */
    public $AppId;

    /**
     * @var integer 审计状态，0-未开通审计；1-已开通审计。
     */
    public $AuditStatus;

    /**
     * @var string 实例Id。
     */
    public $InstanceId;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var integer 项目Id。
     */
    public $ProjectId;

    /**
     * @var string 实例所在地域。
     */
    public $Region;

    /**
     * @var array 资源Tags。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceTags;

    /**
     * @param integer $AppId appId。
     * @param integer $AuditStatus 审计状态，0-未开通审计；1-已开通审计。
     * @param string $InstanceId 实例Id。
     * @param string $InstanceName 实例名称。
     * @param integer $ProjectId 项目Id。
     * @param string $Region 实例所在地域。
     * @param array $ResourceTags 资源Tags。
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("AuditStatus",$param) and $param["AuditStatus"] !== null) {
            $this->AuditStatus = $param["AuditStatus"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ResourceTags",$param) and $param["ResourceTags"] !== null) {
            $this->ResourceTags = $param["ResourceTags"];
        }
    }
}
