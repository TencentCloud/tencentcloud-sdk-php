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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * license相关信息
 *
 * @method string getLicense() 获取license编号
 * @method void setLicense(string $License) 设置license编号
 * @method integer getLicenseEdition() 获取license版本；1-基础版，2-标准版，3-增值版
 * @method void setLicenseEdition(integer $LicenseEdition) 设置license版本；1-基础版，2-标准版，3-增值版
 * @method string getResourceStartTime() 获取生效开始时间, 格式yyyy-MM-dd HH:mm:ss
 * @method void setResourceStartTime(string $ResourceStartTime) 设置生效开始时间, 格式yyyy-MM-dd HH:mm:ss
 * @method string getResourceEndTime() 获取生效结束时间, 格式yyyy-MM-dd HH:mm:ss
 * @method void setResourceEndTime(string $ResourceEndTime) 设置生效结束时间, 格式yyyy-MM-dd HH:mm:ss
 * @method string getIsolationDeadline() 获取隔离截止时间, 格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolationDeadline(string $IsolationDeadline) 设置隔离截止时间, 格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDestroyTime() 获取资源计划销毁时间, 格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestroyTime(string $DestroyTime) 设置资源计划销毁时间, 格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取资源状态，1.正常，2.隔离，3.销毁
 * @method void setStatus(integer $Status) 设置资源状态，1.正常，2.隔离，3.销毁
 * @method string getExtra() 获取扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtra(string $Extra) 设置扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class LicenseInfo extends AbstractModel
{
    /**
     * @var string license编号
     */
    public $License;

    /**
     * @var integer license版本；1-基础版，2-标准版，3-增值版
     */
    public $LicenseEdition;

    /**
     * @var string 生效开始时间, 格式yyyy-MM-dd HH:mm:ss
     */
    public $ResourceStartTime;

    /**
     * @var string 生效结束时间, 格式yyyy-MM-dd HH:mm:ss
     */
    public $ResourceEndTime;

    /**
     * @var string 隔离截止时间, 格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolationDeadline;

    /**
     * @var string 资源计划销毁时间, 格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestroyTime;

    /**
     * @var integer 资源状态，1.正常，2.隔离，3.销毁
     */
    public $Status;

    /**
     * @var string 扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Extra;

    /**
     * @param string $License license编号
     * @param integer $LicenseEdition license版本；1-基础版，2-标准版，3-增值版
     * @param string $ResourceStartTime 生效开始时间, 格式yyyy-MM-dd HH:mm:ss
     * @param string $ResourceEndTime 生效结束时间, 格式yyyy-MM-dd HH:mm:ss
     * @param string $IsolationDeadline 隔离截止时间, 格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DestroyTime 资源计划销毁时间, 格式yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 资源状态，1.正常，2.隔离，3.销毁
     * @param string $Extra 扩展信息
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
        if (array_key_exists("License",$param) and $param["License"] !== null) {
            $this->License = $param["License"];
        }

        if (array_key_exists("LicenseEdition",$param) and $param["LicenseEdition"] !== null) {
            $this->LicenseEdition = $param["LicenseEdition"];
        }

        if (array_key_exists("ResourceStartTime",$param) and $param["ResourceStartTime"] !== null) {
            $this->ResourceStartTime = $param["ResourceStartTime"];
        }

        if (array_key_exists("ResourceEndTime",$param) and $param["ResourceEndTime"] !== null) {
            $this->ResourceEndTime = $param["ResourceEndTime"];
        }

        if (array_key_exists("IsolationDeadline",$param) and $param["IsolationDeadline"] !== null) {
            $this->IsolationDeadline = $param["IsolationDeadline"];
        }

        if (array_key_exists("DestroyTime",$param) and $param["DestroyTime"] !== null) {
            $this->DestroyTime = $param["DestroyTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Extra",$param) and $param["Extra"] !== null) {
            $this->Extra = $param["Extra"];
        }
    }
}
