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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务配置入参
 *
 * @method string getKey() 获取配置项 Key
MinNum 最小副本数
MaxNum 最大副本数
PolicyDetails 扩缩容策略
AccessTypes 访问类型
TimerScale 定时扩缩容
InternalAccess 内网访问
OperationMode 运行模式 noScale | condScale | alwaysScale | custom ｜ manualScale
SessionAffinity 会话亲和性 open | close
CpuSpecs cpu 规格
MemSpecs mem规格
EnvParam 环境变量
LogPath 日志采集路径
Port 端口
Dockerfile dockerfile 文件名
BuildDir 目标目录
Tag 服务标签
LogType 日志类型 none | default | custom 
LogSetId 日志集Id
LogTopicId 日志主题ID
LogParseType 日志解析类型 json ｜ line
EntryPoint entrypoint 命令
Cmd cmd命令
VpcConf 网络信息
 * @method void setKey(string $Key) 设置配置项 Key
MinNum 最小副本数
MaxNum 最大副本数
PolicyDetails 扩缩容策略
AccessTypes 访问类型
TimerScale 定时扩缩容
InternalAccess 内网访问
OperationMode 运行模式 noScale | condScale | alwaysScale | custom ｜ manualScale
SessionAffinity 会话亲和性 open | close
CpuSpecs cpu 规格
MemSpecs mem规格
EnvParam 环境变量
LogPath 日志采集路径
Port 端口
Dockerfile dockerfile 文件名
BuildDir 目标目录
Tag 服务标签
LogType 日志类型 none | default | custom 
LogSetId 日志集Id
LogTopicId 日志主题ID
LogParseType 日志解析类型 json ｜ line
EntryPoint entrypoint 命令
Cmd cmd命令
VpcConf 网络信息
 * @method string getValue() 获取字符串类型配置项值
InternalAccess、OperationMode、SessionAffinity、EnvParam、LogPath、Dockerfile、BuildDir、Tag、LogType、LogSetId、LogTopicId、LogParseType
 * @method void setValue(string $Value) 设置字符串类型配置项值
InternalAccess、OperationMode、SessionAffinity、EnvParam、LogPath、Dockerfile、BuildDir、Tag、LogType、LogSetId、LogTopicId、LogParseType
 * @method integer getIntValue() 获取int 类型配置项值
MinNum、MaxNum、Port
 * @method void setIntValue(integer $IntValue) 设置int 类型配置项值
MinNum、MaxNum、Port
 * @method boolean getBoolValue() 获取bool 类型配置项值
 * @method void setBoolValue(boolean $BoolValue) 设置bool 类型配置项值
 * @method float getFloatValue() 获取浮点型配置项值
CpuSpecs、MemSpecs
 * @method void setFloatValue(float $FloatValue) 设置浮点型配置项值
CpuSpecs、MemSpecs
 * @method array getArrayValue() 获取字符串数组配置项值
AccessTypes，EntryPoint，Cmd
 * @method void setArrayValue(array $ArrayValue) 设置字符串数组配置项值
AccessTypes，EntryPoint，Cmd
 * @method array getPolicyDetails() 获取扩缩容策略配置项值
 * @method void setPolicyDetails(array $PolicyDetails) 设置扩缩容策略配置项值
 * @method array getTimerScale() 获取定时扩缩容配置项值
 * @method void setTimerScale(array $TimerScale) 设置定时扩缩容配置项值
 * @method VpcConf getVpcConf() 获取配置内网访问时网络信息
 * @method void setVpcConf(VpcConf $VpcConf) 设置配置内网访问时网络信息
 * @method array getVolumesConf() 获取存储配置信息
 * @method void setVolumesConf(array $VolumesConf) 设置存储配置信息
 */
class DiffConfigItem extends AbstractModel
{
    /**
     * @var string 配置项 Key
MinNum 最小副本数
MaxNum 最大副本数
PolicyDetails 扩缩容策略
AccessTypes 访问类型
TimerScale 定时扩缩容
InternalAccess 内网访问
OperationMode 运行模式 noScale | condScale | alwaysScale | custom ｜ manualScale
SessionAffinity 会话亲和性 open | close
CpuSpecs cpu 规格
MemSpecs mem规格
EnvParam 环境变量
LogPath 日志采集路径
Port 端口
Dockerfile dockerfile 文件名
BuildDir 目标目录
Tag 服务标签
LogType 日志类型 none | default | custom 
LogSetId 日志集Id
LogTopicId 日志主题ID
LogParseType 日志解析类型 json ｜ line
EntryPoint entrypoint 命令
Cmd cmd命令
VpcConf 网络信息
     */
    public $Key;

    /**
     * @var string 字符串类型配置项值
InternalAccess、OperationMode、SessionAffinity、EnvParam、LogPath、Dockerfile、BuildDir、Tag、LogType、LogSetId、LogTopicId、LogParseType
     */
    public $Value;

    /**
     * @var integer int 类型配置项值
MinNum、MaxNum、Port
     */
    public $IntValue;

    /**
     * @var boolean bool 类型配置项值
     */
    public $BoolValue;

    /**
     * @var float 浮点型配置项值
CpuSpecs、MemSpecs
     */
    public $FloatValue;

    /**
     * @var array 字符串数组配置项值
AccessTypes，EntryPoint，Cmd
     */
    public $ArrayValue;

    /**
     * @var array 扩缩容策略配置项值
     */
    public $PolicyDetails;

    /**
     * @var array 定时扩缩容配置项值
     */
    public $TimerScale;

    /**
     * @var VpcConf 配置内网访问时网络信息
     */
    public $VpcConf;

    /**
     * @var array 存储配置信息
     */
    public $VolumesConf;

    /**
     * @param string $Key 配置项 Key
MinNum 最小副本数
MaxNum 最大副本数
PolicyDetails 扩缩容策略
AccessTypes 访问类型
TimerScale 定时扩缩容
InternalAccess 内网访问
OperationMode 运行模式 noScale | condScale | alwaysScale | custom ｜ manualScale
SessionAffinity 会话亲和性 open | close
CpuSpecs cpu 规格
MemSpecs mem规格
EnvParam 环境变量
LogPath 日志采集路径
Port 端口
Dockerfile dockerfile 文件名
BuildDir 目标目录
Tag 服务标签
LogType 日志类型 none | default | custom 
LogSetId 日志集Id
LogTopicId 日志主题ID
LogParseType 日志解析类型 json ｜ line
EntryPoint entrypoint 命令
Cmd cmd命令
VpcConf 网络信息
     * @param string $Value 字符串类型配置项值
InternalAccess、OperationMode、SessionAffinity、EnvParam、LogPath、Dockerfile、BuildDir、Tag、LogType、LogSetId、LogTopicId、LogParseType
     * @param integer $IntValue int 类型配置项值
MinNum、MaxNum、Port
     * @param boolean $BoolValue bool 类型配置项值
     * @param float $FloatValue 浮点型配置项值
CpuSpecs、MemSpecs
     * @param array $ArrayValue 字符串数组配置项值
AccessTypes，EntryPoint，Cmd
     * @param array $PolicyDetails 扩缩容策略配置项值
     * @param array $TimerScale 定时扩缩容配置项值
     * @param VpcConf $VpcConf 配置内网访问时网络信息
     * @param array $VolumesConf 存储配置信息
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("IntValue",$param) and $param["IntValue"] !== null) {
            $this->IntValue = $param["IntValue"];
        }

        if (array_key_exists("BoolValue",$param) and $param["BoolValue"] !== null) {
            $this->BoolValue = $param["BoolValue"];
        }

        if (array_key_exists("FloatValue",$param) and $param["FloatValue"] !== null) {
            $this->FloatValue = $param["FloatValue"];
        }

        if (array_key_exists("ArrayValue",$param) and $param["ArrayValue"] !== null) {
            $this->ArrayValue = $param["ArrayValue"];
        }

        if (array_key_exists("PolicyDetails",$param) and $param["PolicyDetails"] !== null) {
            $this->PolicyDetails = [];
            foreach ($param["PolicyDetails"] as $key => $value){
                $obj = new HpaPolicy();
                $obj->deserialize($value);
                array_push($this->PolicyDetails, $obj);
            }
        }

        if (array_key_exists("TimerScale",$param) and $param["TimerScale"] !== null) {
            $this->TimerScale = [];
            foreach ($param["TimerScale"] as $key => $value){
                $obj = new TimerScale();
                $obj->deserialize($value);
                array_push($this->TimerScale, $obj);
            }
        }

        if (array_key_exists("VpcConf",$param) and $param["VpcConf"] !== null) {
            $this->VpcConf = new VpcConf();
            $this->VpcConf->deserialize($param["VpcConf"]);
        }

        if (array_key_exists("VolumesConf",$param) and $param["VolumesConf"] !== null) {
            $this->VolumesConf = [];
            foreach ($param["VolumesConf"] as $key => $value){
                $obj = new VolumeConf();
                $obj->deserialize($value);
                array_push($this->VolumesConf, $obj);
            }
        }
    }
}
