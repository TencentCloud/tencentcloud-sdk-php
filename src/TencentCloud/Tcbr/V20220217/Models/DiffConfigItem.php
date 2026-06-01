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
 * @method string getKey() 获取<p>配置项 Key<br>MinNum 最小副本数<br>MaxNum 最大副本数<br>PolicyDetails 扩缩容策略<br>AccessTypes 访问类型<br>TimerScale 定时扩缩容<br>InternalAccess 内网访问<br>OperationMode 运行模式 noScale | condScale | alwaysScale | custom ｜ manualScale<br>SessionAffinity 会话亲和性 open | close<br>CpuSpecs cpu 规格<br>MemSpecs mem规格<br>EnvParam 环境变量<br>LogPath 日志采集路径<br>Port 端口<br>Dockerfile dockerfile 文件名<br>BuildDir 目标目录<br>Tag 服务标签<br>LogType 日志类型 none | default | custom<br>LogSetId 日志集Id<br>LogTopicId 日志主题ID<br>LogParseType 日志解析类型 json ｜ line<br>EntryPoint entrypoint 命令<br>Cmd cmd命令<br>VpcConf 网络信息</p>
 * @method void setKey(string $Key) 设置<p>配置项 Key<br>MinNum 最小副本数<br>MaxNum 最大副本数<br>PolicyDetails 扩缩容策略<br>AccessTypes 访问类型<br>TimerScale 定时扩缩容<br>InternalAccess 内网访问<br>OperationMode 运行模式 noScale | condScale | alwaysScale | custom ｜ manualScale<br>SessionAffinity 会话亲和性 open | close<br>CpuSpecs cpu 规格<br>MemSpecs mem规格<br>EnvParam 环境变量<br>LogPath 日志采集路径<br>Port 端口<br>Dockerfile dockerfile 文件名<br>BuildDir 目标目录<br>Tag 服务标签<br>LogType 日志类型 none | default | custom<br>LogSetId 日志集Id<br>LogTopicId 日志主题ID<br>LogParseType 日志解析类型 json ｜ line<br>EntryPoint entrypoint 命令<br>Cmd cmd命令<br>VpcConf 网络信息</p>
 * @method string getValue() 获取<p>字符串类型配置项值<br>InternalAccess、OperationMode、SessionAffinity、EnvParam、LogPath、Dockerfile、BuildDir、Tag、LogType、LogSetId、LogTopicId、LogParseType</p>
 * @method void setValue(string $Value) 设置<p>字符串类型配置项值<br>InternalAccess、OperationMode、SessionAffinity、EnvParam、LogPath、Dockerfile、BuildDir、Tag、LogType、LogSetId、LogTopicId、LogParseType</p>
 * @method integer getIntValue() 获取<p>int 类型配置项值<br>MinNum、MaxNum、Port</p>
 * @method void setIntValue(integer $IntValue) 设置<p>int 类型配置项值<br>MinNum、MaxNum、Port</p>
 * @method boolean getBoolValue() 获取<p>bool 类型配置项值</p>
 * @method void setBoolValue(boolean $BoolValue) 设置<p>bool 类型配置项值</p>
 * @method float getFloatValue() 获取<p>浮点型配置项值<br>CpuSpecs、MemSpecs</p>
 * @method void setFloatValue(float $FloatValue) 设置<p>浮点型配置项值<br>CpuSpecs、MemSpecs</p>
 * @method array getArrayValue() 获取<p>字符串数组配置项值<br>AccessTypes，EntryPoint，Cmd</p>
 * @method void setArrayValue(array $ArrayValue) 设置<p>字符串数组配置项值<br>AccessTypes，EntryPoint，Cmd</p>
 * @method array getPolicyDetails() 获取<p>扩缩容策略配置项值</p>
 * @method void setPolicyDetails(array $PolicyDetails) 设置<p>扩缩容策略配置项值</p>
 * @method array getTimerScale() 获取<p>定时扩缩容配置项值</p>
 * @method void setTimerScale(array $TimerScale) 设置<p>定时扩缩容配置项值</p>
 * @method VpcConf getVpcConf() 获取<p>配置内网访问时网络信息</p>
 * @method void setVpcConf(VpcConf $VpcConf) 设置<p>配置内网访问时网络信息</p>
 * @method array getVolumesConf() 获取<p>存储配置信息</p>
 * @method void setVolumesConf(array $VolumesConf) 设置<p>存储配置信息</p>
 * @method PublicNetConf getPublicNetConf() 获取<p>公网访问配置</p>
 * @method void setPublicNetConf(PublicNetConf $PublicNetConf) 设置<p>公网访问配置</p>
 */
class DiffConfigItem extends AbstractModel
{
    /**
     * @var string <p>配置项 Key<br>MinNum 最小副本数<br>MaxNum 最大副本数<br>PolicyDetails 扩缩容策略<br>AccessTypes 访问类型<br>TimerScale 定时扩缩容<br>InternalAccess 内网访问<br>OperationMode 运行模式 noScale | condScale | alwaysScale | custom ｜ manualScale<br>SessionAffinity 会话亲和性 open | close<br>CpuSpecs cpu 规格<br>MemSpecs mem规格<br>EnvParam 环境变量<br>LogPath 日志采集路径<br>Port 端口<br>Dockerfile dockerfile 文件名<br>BuildDir 目标目录<br>Tag 服务标签<br>LogType 日志类型 none | default | custom<br>LogSetId 日志集Id<br>LogTopicId 日志主题ID<br>LogParseType 日志解析类型 json ｜ line<br>EntryPoint entrypoint 命令<br>Cmd cmd命令<br>VpcConf 网络信息</p>
     */
    public $Key;

    /**
     * @var string <p>字符串类型配置项值<br>InternalAccess、OperationMode、SessionAffinity、EnvParam、LogPath、Dockerfile、BuildDir、Tag、LogType、LogSetId、LogTopicId、LogParseType</p>
     */
    public $Value;

    /**
     * @var integer <p>int 类型配置项值<br>MinNum、MaxNum、Port</p>
     */
    public $IntValue;

    /**
     * @var boolean <p>bool 类型配置项值</p>
     */
    public $BoolValue;

    /**
     * @var float <p>浮点型配置项值<br>CpuSpecs、MemSpecs</p>
     */
    public $FloatValue;

    /**
     * @var array <p>字符串数组配置项值<br>AccessTypes，EntryPoint，Cmd</p>
     */
    public $ArrayValue;

    /**
     * @var array <p>扩缩容策略配置项值</p>
     */
    public $PolicyDetails;

    /**
     * @var array <p>定时扩缩容配置项值</p>
     */
    public $TimerScale;

    /**
     * @var VpcConf <p>配置内网访问时网络信息</p>
     */
    public $VpcConf;

    /**
     * @var array <p>存储配置信息</p>
     */
    public $VolumesConf;

    /**
     * @var PublicNetConf <p>公网访问配置</p>
     */
    public $PublicNetConf;

    /**
     * @param string $Key <p>配置项 Key<br>MinNum 最小副本数<br>MaxNum 最大副本数<br>PolicyDetails 扩缩容策略<br>AccessTypes 访问类型<br>TimerScale 定时扩缩容<br>InternalAccess 内网访问<br>OperationMode 运行模式 noScale | condScale | alwaysScale | custom ｜ manualScale<br>SessionAffinity 会话亲和性 open | close<br>CpuSpecs cpu 规格<br>MemSpecs mem规格<br>EnvParam 环境变量<br>LogPath 日志采集路径<br>Port 端口<br>Dockerfile dockerfile 文件名<br>BuildDir 目标目录<br>Tag 服务标签<br>LogType 日志类型 none | default | custom<br>LogSetId 日志集Id<br>LogTopicId 日志主题ID<br>LogParseType 日志解析类型 json ｜ line<br>EntryPoint entrypoint 命令<br>Cmd cmd命令<br>VpcConf 网络信息</p>
     * @param string $Value <p>字符串类型配置项值<br>InternalAccess、OperationMode、SessionAffinity、EnvParam、LogPath、Dockerfile、BuildDir、Tag、LogType、LogSetId、LogTopicId、LogParseType</p>
     * @param integer $IntValue <p>int 类型配置项值<br>MinNum、MaxNum、Port</p>
     * @param boolean $BoolValue <p>bool 类型配置项值</p>
     * @param float $FloatValue <p>浮点型配置项值<br>CpuSpecs、MemSpecs</p>
     * @param array $ArrayValue <p>字符串数组配置项值<br>AccessTypes，EntryPoint，Cmd</p>
     * @param array $PolicyDetails <p>扩缩容策略配置项值</p>
     * @param array $TimerScale <p>定时扩缩容配置项值</p>
     * @param VpcConf $VpcConf <p>配置内网访问时网络信息</p>
     * @param array $VolumesConf <p>存储配置信息</p>
     * @param PublicNetConf $PublicNetConf <p>公网访问配置</p>
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

        if (array_key_exists("PublicNetConf",$param) and $param["PublicNetConf"] !== null) {
            $this->PublicNetConf = new PublicNetConf();
            $this->PublicNetConf->deserialize($param["PublicNetConf"]);
        }
    }
}
