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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件配置项
 *
 * @method string getConfigId() 获取配置项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigId(string $ConfigId) 设置配置项ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigName() 获取配置项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigName(string $ConfigName) 设置配置项名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigVersion() 获取配置项版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigVersion(string $ConfigVersion) 设置配置项版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigVersionDesc() 获取配置项版本描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigVersionDesc(string $ConfigVersionDesc) 设置配置项版本描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigFileName() 获取配置项文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigFileName(string $ConfigFileName) 设置配置项文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigFileValue() 获取配置项文件内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigFileValue(string $ConfigFileValue) 设置配置项文件内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigFileCode() 获取配置项文件编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigFileCode(string $ConfigFileCode) 设置配置项文件编码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreationTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreationTime(string $CreationTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationId() 获取配置项归属应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置配置项归属应用ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationName() 获取应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationName(string $ApplicationName) 设置应用名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDeleteFlag() 获取删除标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeleteFlag(boolean $DeleteFlag) 设置删除标识
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConfigVersionCount() 获取配置项版本数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigVersionCount(integer $ConfigVersionCount) 设置配置项版本数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastUpdateTime() 获取配置项最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastUpdateTime(string $LastUpdateTime) 设置配置项最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigFilePath() 获取发布路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigFilePath(string $ConfigFilePath) 设置发布路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConfigPostCmd() 获取后置命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigPostCmd(string $ConfigPostCmd) 设置后置命令
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConfigFileValueLength() 获取配置项文件长度
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigFileValueLength(integer $ConfigFileValueLength) 设置配置项文件长度
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileConfig extends AbstractModel
{
    /**
     * @var string 配置项ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigId;

    /**
     * @var string 配置项名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigName;

    /**
     * @var string 配置项版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigVersion;

    /**
     * @var string 配置项版本描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigVersionDesc;

    /**
     * @var string 配置项文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigFileName;

    /**
     * @var string 配置项文件内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigFileValue;

    /**
     * @var string 配置项文件编码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigFileCode;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreationTime;

    /**
     * @var string 配置项归属应用ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @var string 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationName;

    /**
     * @var boolean 删除标识
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeleteFlag;

    /**
     * @var integer 配置项版本数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigVersionCount;

    /**
     * @var string 配置项最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastUpdateTime;

    /**
     * @var string 发布路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigFilePath;

    /**
     * @var string 后置命令
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigPostCmd;

    /**
     * @var integer 配置项文件长度
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigFileValueLength;

    /**
     * @param string $ConfigId 配置项ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigName 配置项名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigVersion 配置项版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigVersionDesc 配置项版本描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigFileName 配置项文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigFileValue 配置项文件内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigFileCode 配置项文件编码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreationTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationId 配置项归属应用ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationName 应用名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DeleteFlag 删除标识
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConfigVersionCount 配置项版本数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastUpdateTime 配置项最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigFilePath 发布路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConfigPostCmd 后置命令
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConfigFileValueLength 配置项文件长度
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigVersion",$param) and $param["ConfigVersion"] !== null) {
            $this->ConfigVersion = $param["ConfigVersion"];
        }

        if (array_key_exists("ConfigVersionDesc",$param) and $param["ConfigVersionDesc"] !== null) {
            $this->ConfigVersionDesc = $param["ConfigVersionDesc"];
        }

        if (array_key_exists("ConfigFileName",$param) and $param["ConfigFileName"] !== null) {
            $this->ConfigFileName = $param["ConfigFileName"];
        }

        if (array_key_exists("ConfigFileValue",$param) and $param["ConfigFileValue"] !== null) {
            $this->ConfigFileValue = $param["ConfigFileValue"];
        }

        if (array_key_exists("ConfigFileCode",$param) and $param["ConfigFileCode"] !== null) {
            $this->ConfigFileCode = $param["ConfigFileCode"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("ApplicationName",$param) and $param["ApplicationName"] !== null) {
            $this->ApplicationName = $param["ApplicationName"];
        }

        if (array_key_exists("DeleteFlag",$param) and $param["DeleteFlag"] !== null) {
            $this->DeleteFlag = $param["DeleteFlag"];
        }

        if (array_key_exists("ConfigVersionCount",$param) and $param["ConfigVersionCount"] !== null) {
            $this->ConfigVersionCount = $param["ConfigVersionCount"];
        }

        if (array_key_exists("LastUpdateTime",$param) and $param["LastUpdateTime"] !== null) {
            $this->LastUpdateTime = $param["LastUpdateTime"];
        }

        if (array_key_exists("ConfigFilePath",$param) and $param["ConfigFilePath"] !== null) {
            $this->ConfigFilePath = $param["ConfigFilePath"];
        }

        if (array_key_exists("ConfigPostCmd",$param) and $param["ConfigPostCmd"] !== null) {
            $this->ConfigPostCmd = $param["ConfigPostCmd"];
        }

        if (array_key_exists("ConfigFileValueLength",$param) and $param["ConfigFileValueLength"] !== null) {
            $this->ConfigFileValueLength = $param["ConfigFileValueLength"];
        }
    }
}
