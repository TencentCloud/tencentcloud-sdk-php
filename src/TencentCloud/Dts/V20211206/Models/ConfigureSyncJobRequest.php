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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConfigureSyncJob请求参数结构体
 *
 * @method string getJobId() 获取<p>同步实例id（即标识一个同步作业），形如sync-werwfs23，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
 * @method void setJobId(string $JobId) 设置<p>同步实例id（即标识一个同步作业），形如sync-werwfs23，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
 * @method string getSrcAccessType() 获取<p>源端接入类型，cdb(云数据库)、cvm(云服务器自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云),注意具体可选值依赖当前链路</p>
 * @method void setSrcAccessType(string $SrcAccessType) 设置<p>源端接入类型，cdb(云数据库)、cvm(云服务器自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云),注意具体可选值依赖当前链路</p>
 * @method string getDstAccessType() 获取<p>目标端接入类型，cdb(云数据库)、cvm(云服务器自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)、ckafka(CKafka实例),注意具体可选值依赖当前链路</p>
 * @method void setDstAccessType(string $DstAccessType) 设置<p>目标端接入类型，cdb(云数据库)、cvm(云服务器自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)、ckafka(CKafka实例),注意具体可选值依赖当前链路</p>
 * @method Objects getObjects() 获取<p>同步库表对象信息</p>
 * @method void setObjects(Objects $Objects) 设置<p>同步库表对象信息</p>
 * @method string getJobName() 获取<p>同步任务名称</p>
 * @method void setJobName(string $JobName) 设置<p>同步任务名称</p>
 * @method string getJobMode() 获取<p>配置任务模式，默认值为fullMode</p><p>枚举值：</p><ul><li>fullMode： 正常模式</li></ul>
 * @method void setJobMode(string $JobMode) 设置<p>配置任务模式，默认值为fullMode</p><p>枚举值：</p><ul><li>fullMode： 正常模式</li></ul>
 * @method string getRunMode() 获取<p>运行模式，取值如：Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)</p>
 * @method void setRunMode(string $RunMode) 设置<p>运行模式，取值如：Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)</p>
 * @method string getExpectRunTime() 获取<p>期待启动时间，当RunMode取值为Timed时，此值必填，形如：&quot;2006-01-02 15:04:05&quot;</p>
 * @method void setExpectRunTime(string $ExpectRunTime) 设置<p>期待启动时间，当RunMode取值为Timed时，此值必填，形如：&quot;2006-01-02 15:04:05&quot;</p>
 * @method string getSrcConnectType() 获取<p>源端tdsql连接方式：proxy-通过tdsql proxy主机访问各个set节点，注意只有在自研上云的网络环境下才能通过这种方式连接，SrcInfos中只需要提供proxy主机信息。set-直连set节点，如选择直连set方式，需要正确填写proxy主机信息及所有set节点信息。源端是tdsqlmysql类型必填。</p>
 * @method void setSrcConnectType(string $SrcConnectType) 设置<p>源端tdsql连接方式：proxy-通过tdsql proxy主机访问各个set节点，注意只有在自研上云的网络环境下才能通过这种方式连接，SrcInfos中只需要提供proxy主机信息。set-直连set节点，如选择直连set方式，需要正确填写proxy主机信息及所有set节点信息。源端是tdsqlmysql类型必填。</p>
 * @method Endpoint getSrcInfo() 获取<p>源端信息，单机版类型数据库配置使用，且SrcNodeType传single。例如mysql、percona、mariadb等。</p>
 * @method void setSrcInfo(Endpoint $SrcInfo) 设置<p>源端信息，单机版类型数据库配置使用，且SrcNodeType传single。例如mysql、percona、mariadb等。</p>
 * @method SyncDBEndpointInfos getSrcInfos() 获取<p>源端信息，分布式类型数据库配置使用，且SrcNodeType传cluster。例如分布式数据库tdsqlmysql等，mongodb使用此参数透传。</p>
 * @method void setSrcInfos(SyncDBEndpointInfos $SrcInfos) 设置<p>源端信息，分布式类型数据库配置使用，且SrcNodeType传cluster。例如分布式数据库tdsqlmysql等，mongodb使用此参数透传。</p>
 * @method string getSrcNodeType() 获取<p>枚举值：cluster、single。源库为单节点数据库使用single，多节点使用cluster</p>
 * @method void setSrcNodeType(string $SrcNodeType) 设置<p>枚举值：cluster、single。源库为单节点数据库使用single，多节点使用cluster</p>
 * @method Endpoint getDstInfo() 获取<p>目标端信息，单机版类型数据库配置使用，且SrcNodeType传single。例如mysql、percona、mariadb等。</p>
 * @method void setDstInfo(Endpoint $DstInfo) 设置<p>目标端信息，单机版类型数据库配置使用，且SrcNodeType传single。例如mysql、percona、mariadb等。</p>
 * @method SyncDBEndpointInfos getDstInfos() 获取<p>目标端信息，分布式类型数据库配置使用，且SrcNodeType传cluster。例如分布式数据库tdsqlmysql等，mongodb使用此参数透传。</p>
 * @method void setDstInfos(SyncDBEndpointInfos $DstInfos) 设置<p>目标端信息，分布式类型数据库配置使用，且SrcNodeType传cluster。例如分布式数据库tdsqlmysql等，mongodb使用此参数透传。</p>
 * @method string getDstNodeType() 获取<p>枚举值：cluster、single。目标库为单节点数据库使用single，多节点使用cluster</p>
 * @method void setDstNodeType(string $DstNodeType) 设置<p>枚举值：cluster、single。目标库为单节点数据库使用single，多节点使用cluster</p>
 * @method Options getOptions() 获取<p>同步任务选项；该字段下的RateLimitOption暂时无法生效、如果需要修改限速、可通过ModifySyncRateLimit接口完成限速</p>
 * @method void setOptions(Options $Options) 设置<p>同步任务选项；该字段下的RateLimitOption暂时无法生效、如果需要修改限速、可通过ModifySyncRateLimit接口完成限速</p>
 * @method integer getAutoRetryTimeRangeMinutes() 获取<p>自动重试的时间段、可设置5至720分钟、0表示不重试</p>
 * @method void setAutoRetryTimeRangeMinutes(integer $AutoRetryTimeRangeMinutes) 设置<p>自动重试的时间段、可设置5至720分钟、0表示不重试</p>
 */
class ConfigureSyncJobRequest extends AbstractModel
{
    /**
     * @var string <p>同步实例id（即标识一个同步作业），形如sync-werwfs23，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
     */
    public $JobId;

    /**
     * @var string <p>源端接入类型，cdb(云数据库)、cvm(云服务器自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云),注意具体可选值依赖当前链路</p>
     */
    public $SrcAccessType;

    /**
     * @var string <p>目标端接入类型，cdb(云数据库)、cvm(云服务器自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)、ckafka(CKafka实例),注意具体可选值依赖当前链路</p>
     */
    public $DstAccessType;

    /**
     * @var Objects <p>同步库表对象信息</p>
     */
    public $Objects;

    /**
     * @var string <p>同步任务名称</p>
     */
    public $JobName;

    /**
     * @var string <p>配置任务模式，默认值为fullMode</p><p>枚举值：</p><ul><li>fullMode： 正常模式</li></ul>
     */
    public $JobMode;

    /**
     * @var string <p>运行模式，取值如：Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)</p>
     */
    public $RunMode;

    /**
     * @var string <p>期待启动时间，当RunMode取值为Timed时，此值必填，形如：&quot;2006-01-02 15:04:05&quot;</p>
     */
    public $ExpectRunTime;

    /**
     * @var string <p>源端tdsql连接方式：proxy-通过tdsql proxy主机访问各个set节点，注意只有在自研上云的网络环境下才能通过这种方式连接，SrcInfos中只需要提供proxy主机信息。set-直连set节点，如选择直连set方式，需要正确填写proxy主机信息及所有set节点信息。源端是tdsqlmysql类型必填。</p>
     */
    public $SrcConnectType;

    /**
     * @var Endpoint <p>源端信息，单机版类型数据库配置使用，且SrcNodeType传single。例如mysql、percona、mariadb等。</p>
     */
    public $SrcInfo;

    /**
     * @var SyncDBEndpointInfos <p>源端信息，分布式类型数据库配置使用，且SrcNodeType传cluster。例如分布式数据库tdsqlmysql等，mongodb使用此参数透传。</p>
     */
    public $SrcInfos;

    /**
     * @var string <p>枚举值：cluster、single。源库为单节点数据库使用single，多节点使用cluster</p>
     */
    public $SrcNodeType;

    /**
     * @var Endpoint <p>目标端信息，单机版类型数据库配置使用，且SrcNodeType传single。例如mysql、percona、mariadb等。</p>
     */
    public $DstInfo;

    /**
     * @var SyncDBEndpointInfos <p>目标端信息，分布式类型数据库配置使用，且SrcNodeType传cluster。例如分布式数据库tdsqlmysql等，mongodb使用此参数透传。</p>
     */
    public $DstInfos;

    /**
     * @var string <p>枚举值：cluster、single。目标库为单节点数据库使用single，多节点使用cluster</p>
     */
    public $DstNodeType;

    /**
     * @var Options <p>同步任务选项；该字段下的RateLimitOption暂时无法生效、如果需要修改限速、可通过ModifySyncRateLimit接口完成限速</p>
     */
    public $Options;

    /**
     * @var integer <p>自动重试的时间段、可设置5至720分钟、0表示不重试</p>
     */
    public $AutoRetryTimeRangeMinutes;

    /**
     * @param string $JobId <p>同步实例id（即标识一个同步作业），形如sync-werwfs23，可通过<a href="https://cloud.tencent.com/document/product/571/82103">DescribeSyncJobs</a>接口获取。</p>
     * @param string $SrcAccessType <p>源端接入类型，cdb(云数据库)、cvm(云服务器自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云),注意具体可选值依赖当前链路</p>
     * @param string $DstAccessType <p>目标端接入类型，cdb(云数据库)、cvm(云服务器自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)、ckafka(CKafka实例),注意具体可选值依赖当前链路</p>
     * @param Objects $Objects <p>同步库表对象信息</p>
     * @param string $JobName <p>同步任务名称</p>
     * @param string $JobMode <p>配置任务模式，默认值为fullMode</p><p>枚举值：</p><ul><li>fullMode： 正常模式</li></ul>
     * @param string $RunMode <p>运行模式，取值如：Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)</p>
     * @param string $ExpectRunTime <p>期待启动时间，当RunMode取值为Timed时，此值必填，形如：&quot;2006-01-02 15:04:05&quot;</p>
     * @param string $SrcConnectType <p>源端tdsql连接方式：proxy-通过tdsql proxy主机访问各个set节点，注意只有在自研上云的网络环境下才能通过这种方式连接，SrcInfos中只需要提供proxy主机信息。set-直连set节点，如选择直连set方式，需要正确填写proxy主机信息及所有set节点信息。源端是tdsqlmysql类型必填。</p>
     * @param Endpoint $SrcInfo <p>源端信息，单机版类型数据库配置使用，且SrcNodeType传single。例如mysql、percona、mariadb等。</p>
     * @param SyncDBEndpointInfos $SrcInfos <p>源端信息，分布式类型数据库配置使用，且SrcNodeType传cluster。例如分布式数据库tdsqlmysql等，mongodb使用此参数透传。</p>
     * @param string $SrcNodeType <p>枚举值：cluster、single。源库为单节点数据库使用single，多节点使用cluster</p>
     * @param Endpoint $DstInfo <p>目标端信息，单机版类型数据库配置使用，且SrcNodeType传single。例如mysql、percona、mariadb等。</p>
     * @param SyncDBEndpointInfos $DstInfos <p>目标端信息，分布式类型数据库配置使用，且SrcNodeType传cluster。例如分布式数据库tdsqlmysql等，mongodb使用此参数透传。</p>
     * @param string $DstNodeType <p>枚举值：cluster、single。目标库为单节点数据库使用single，多节点使用cluster</p>
     * @param Options $Options <p>同步任务选项；该字段下的RateLimitOption暂时无法生效、如果需要修改限速、可通过ModifySyncRateLimit接口完成限速</p>
     * @param integer $AutoRetryTimeRangeMinutes <p>自动重试的时间段、可设置5至720分钟、0表示不重试</p>
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

        if (array_key_exists("SrcConnectType",$param) and $param["SrcConnectType"] !== null) {
            $this->SrcConnectType = $param["SrcConnectType"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new Endpoint();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("SrcInfos",$param) and $param["SrcInfos"] !== null) {
            $this->SrcInfos = new SyncDBEndpointInfos();
            $this->SrcInfos->deserialize($param["SrcInfos"]);
        }

        if (array_key_exists("SrcNodeType",$param) and $param["SrcNodeType"] !== null) {
            $this->SrcNodeType = $param["SrcNodeType"];
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new Endpoint();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("DstInfos",$param) and $param["DstInfos"] !== null) {
            $this->DstInfos = new SyncDBEndpointInfos();
            $this->DstInfos->deserialize($param["DstInfos"]);
        }

        if (array_key_exists("DstNodeType",$param) and $param["DstNodeType"] !== null) {
            $this->DstNodeType = $param["DstNodeType"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = new Options();
            $this->Options->deserialize($param["Options"]);
        }

        if (array_key_exists("AutoRetryTimeRangeMinutes",$param) and $param["AutoRetryTimeRangeMinutes"] !== null) {
            $this->AutoRetryTimeRangeMinutes = $param["AutoRetryTimeRangeMinutes"];
        }
    }
}
