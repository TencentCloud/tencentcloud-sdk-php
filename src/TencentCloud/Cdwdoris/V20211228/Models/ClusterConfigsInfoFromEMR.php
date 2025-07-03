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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于返回XML格式的配置文件和内容以及其他配置文件有关的信息
 *
 * @method string getComputeGroupId() 获取计算组id
 * @method void setComputeGroupId(string $ComputeGroupId) 设置计算组id
 * @method string getFileName() 获取配置文件名称
 * @method void setFileName(string $FileName) 设置配置文件名称
 * @method string getFileConf() 获取配置文件对应的相关属性信息
 * @method void setFileConf(string $FileConf) 设置配置文件对应的相关属性信息
 * @method string getKeyConf() 获取配置文件对应的其他属性信息
 * @method void setKeyConf(string $KeyConf) 设置配置文件对应的其他属性信息
 * @method string getOriParam() 获取配置文件的内容，base64编码
 * @method void setOriParam(string $OriParam) 设置配置文件的内容，base64编码
 * @method integer getNeedRestart() 获取用于表示当前配置文件是不是有过修改后没有重启，提醒用户需要重启
 * @method void setNeedRestart(integer $NeedRestart) 设置用于表示当前配置文件是不是有过修改后没有重启，提醒用户需要重启
 * @method string getFilePath() 获取配置文件路径
 * @method void setFilePath(string $FilePath) 设置配置文件路径
 * @method string getFileKeyValues() 获取配置文件kv值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileKeyValues(string $FileKeyValues) 设置配置文件kv值
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFileKeyValuesNew() 获取配置文件kv值
 * @method void setFileKeyValuesNew(array $FileKeyValuesNew) 设置配置文件kv值
 */
class ClusterConfigsInfoFromEMR extends AbstractModel
{
    /**
     * @var string 计算组id
     */
    public $ComputeGroupId;

    /**
     * @var string 配置文件名称
     */
    public $FileName;

    /**
     * @var string 配置文件对应的相关属性信息
     */
    public $FileConf;

    /**
     * @var string 配置文件对应的其他属性信息
     */
    public $KeyConf;

    /**
     * @var string 配置文件的内容，base64编码
     */
    public $OriParam;

    /**
     * @var integer 用于表示当前配置文件是不是有过修改后没有重启，提醒用户需要重启
     */
    public $NeedRestart;

    /**
     * @var string 配置文件路径
     */
    public $FilePath;

    /**
     * @var string 配置文件kv值
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $FileKeyValues;

    /**
     * @var array 配置文件kv值
     */
    public $FileKeyValuesNew;

    /**
     * @param string $ComputeGroupId 计算组id
     * @param string $FileName 配置文件名称
     * @param string $FileConf 配置文件对应的相关属性信息
     * @param string $KeyConf 配置文件对应的其他属性信息
     * @param string $OriParam 配置文件的内容，base64编码
     * @param integer $NeedRestart 用于表示当前配置文件是不是有过修改后没有重启，提醒用户需要重启
     * @param string $FilePath 配置文件路径
     * @param string $FileKeyValues 配置文件kv值
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FileKeyValuesNew 配置文件kv值
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
        if (array_key_exists("ComputeGroupId",$param) and $param["ComputeGroupId"] !== null) {
            $this->ComputeGroupId = $param["ComputeGroupId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileConf",$param) and $param["FileConf"] !== null) {
            $this->FileConf = $param["FileConf"];
        }

        if (array_key_exists("KeyConf",$param) and $param["KeyConf"] !== null) {
            $this->KeyConf = $param["KeyConf"];
        }

        if (array_key_exists("OriParam",$param) and $param["OriParam"] !== null) {
            $this->OriParam = $param["OriParam"];
        }

        if (array_key_exists("NeedRestart",$param) and $param["NeedRestart"] !== null) {
            $this->NeedRestart = $param["NeedRestart"];
        }

        if (array_key_exists("FilePath",$param) and $param["FilePath"] !== null) {
            $this->FilePath = $param["FilePath"];
        }

        if (array_key_exists("FileKeyValues",$param) and $param["FileKeyValues"] !== null) {
            $this->FileKeyValues = $param["FileKeyValues"];
        }

        if (array_key_exists("FileKeyValuesNew",$param) and $param["FileKeyValuesNew"] !== null) {
            $this->FileKeyValuesNew = [];
            foreach ($param["FileKeyValuesNew"] as $key => $value){
                $obj = new ConfigKeyValue();
                $obj->deserialize($value);
                array_push($this->FileKeyValuesNew, $obj);
            }
        }
    }
}
