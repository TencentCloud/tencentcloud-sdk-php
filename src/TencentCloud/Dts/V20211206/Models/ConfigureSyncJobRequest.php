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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConfigureSyncJob请求参数结构体
 *
 * @method string getJobId() 获取同步实例id（即标识一个同步作业），形如sync-werwfs23
 * @method void setJobId(string $JobId) 设置同步实例id（即标识一个同步作业），形如sync-werwfs23
 * @method string getSrcAccessType() 获取源端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云),注意具体可选值依赖当前链路
 * @method void setSrcAccessType(string $SrcAccessType) 设置源端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云),注意具体可选值依赖当前链路
 * @method string getDstAccessType() 获取目标端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)、ckafka(CKafka实例),注意具体可选值依赖当前链路
 * @method void setDstAccessType(string $DstAccessType) 设置目标端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)、ckafka(CKafka实例),注意具体可选值依赖当前链路
 * @method Options getOptions() 获取同步任务选项
 * @method void setOptions(Options $Options) 设置同步任务选项
 * @method Objects getObjects() 获取同步库表对象信息
 * @method void setObjects(Objects $Objects) 设置同步库表对象信息
 * @method string getJobName() 获取同步任务名称
 * @method void setJobName(string $JobName) 设置同步任务名称
 * @method string getJobMode() 获取枚举值是 liteMode 和 fullMode ，分别对应精简模式或正常模式
 * @method void setJobMode(string $JobMode) 设置枚举值是 liteMode 和 fullMode ，分别对应精简模式或正常模式
 * @method string getRunMode() 获取运行模式，取值如：Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)
 * @method void setRunMode(string $RunMode) 设置运行模式，取值如：Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)
 * @method string getExpectRunTime() 获取期待启动时间，当RunMode取值为Timed时，此值必填，形如："2006-01-02 15:04:05"
 * @method void setExpectRunTime(string $ExpectRunTime) 设置期待启动时间，当RunMode取值为Timed时，此值必填，形如："2006-01-02 15:04:05"
 * @method Endpoint getSrcInfo() 获取源端信息，单节点数据库使用，且SrcNodeType传single
 * @method void setSrcInfo(Endpoint $SrcInfo) 设置源端信息，单节点数据库使用，且SrcNodeType传single
 * @method Endpoint getDstInfo() 获取目标端信息，单节点数据库使用
 * @method void setDstInfo(Endpoint $DstInfo) 设置目标端信息，单节点数据库使用
 * @method integer getAutoRetryTimeRangeMinutes() 获取自动重试的时间段、可设置5至720分钟、0表示不重试
 * @method void setAutoRetryTimeRangeMinutes(integer $AutoRetryTimeRangeMinutes) 设置自动重试的时间段、可设置5至720分钟、0表示不重试
 */
class ConfigureSyncJobRequest extends AbstractModel
{
    /**
     * @var string 同步实例id（即标识一个同步作业），形如sync-werwfs23
     */
    public $JobId;

    /**
     * @var string 源端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云),注意具体可选值依赖当前链路
     */
    public $SrcAccessType;

    /**
     * @var string 目标端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)、ckafka(CKafka实例),注意具体可选值依赖当前链路
     */
    public $DstAccessType;

    /**
     * @var Options 同步任务选项
     */
    public $Options;

    /**
     * @var Objects 同步库表对象信息
     */
    public $Objects;

    /**
     * @var string 同步任务名称
     */
    public $JobName;

    /**
     * @var string 枚举值是 liteMode 和 fullMode ，分别对应精简模式或正常模式
     */
    public $JobMode;

    /**
     * @var string 运行模式，取值如：Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)
     */
    public $RunMode;

    /**
     * @var string 期待启动时间，当RunMode取值为Timed时，此值必填，形如："2006-01-02 15:04:05"
     */
    public $ExpectRunTime;

    /**
     * @var Endpoint 源端信息，单节点数据库使用，且SrcNodeType传single
     */
    public $SrcInfo;

    /**
     * @var Endpoint 目标端信息，单节点数据库使用
     */
    public $DstInfo;

    /**
     * @var integer 自动重试的时间段、可设置5至720分钟、0表示不重试
     */
    public $AutoRetryTimeRangeMinutes;

    /**
     * @param string $JobId 同步实例id（即标识一个同步作业），形如sync-werwfs23
     * @param string $SrcAccessType 源端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云),注意具体可选值依赖当前链路
     * @param string $DstAccessType 目标端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)、ckafka(CKafka实例),注意具体可选值依赖当前链路
     * @param Options $Options 同步任务选项
     * @param Objects $Objects 同步库表对象信息
     * @param string $JobName 同步任务名称
     * @param string $JobMode 枚举值是 liteMode 和 fullMode ，分别对应精简模式或正常模式
     * @param string $RunMode 运行模式，取值如：Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)
     * @param string $ExpectRunTime 期待启动时间，当RunMode取值为Timed时，此值必填，形如："2006-01-02 15:04:05"
     * @param Endpoint $SrcInfo 源端信息，单节点数据库使用，且SrcNodeType传single
     * @param Endpoint $DstInfo 目标端信息，单节点数据库使用
     * @param integer $AutoRetryTimeRangeMinutes 自动重试的时间段、可设置5至720分钟、0表示不重试
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = new Options();
            $this->Options->deserialize($param["Options"]);
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = new Objects();
            $this->Objects->deserialize($param["Objects"]);
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("JobMode",$param) and $param["JobMode"] !== null) {
            $this->JobMode = $param["JobMode"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("ExpectRunTime",$param) and $param["ExpectRunTime"] !== null) {
            $this->ExpectRunTime = $param["ExpectRunTime"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new Endpoint();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new Endpoint();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("AutoRetryTimeRangeMinutes",$param) and $param["AutoRetryTimeRangeMinutes"] !== null) {
            $this->AutoRetryTimeRangeMinutes = $param["AutoRetryTimeRangeMinutes"];
        }
    }
}
