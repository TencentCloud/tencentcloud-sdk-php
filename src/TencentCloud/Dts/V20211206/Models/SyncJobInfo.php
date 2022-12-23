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
 * 同步任务信息
 *
 * @method string getJobId() 获取同步任务id，如：sync-btso140
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置同步任务id，如：sync-btso140
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobName() 获取同步任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobName(string $JobName) 设置同步任务名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayMode() 获取付款方式，PostPay(按量付费)、PrePay(包年包月)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayMode(string $PayMode) 设置付款方式，PostPay(按量付费)、PrePay(包年包月)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunMode() 获取运行模式，Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunMode(string $RunMode) 设置运行模式，Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpectRunTime() 获取期待运行时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpectRunTime(string $ExpectRunTime) 设置期待运行时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAllActions() 获取支持的所有操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllActions(array $AllActions) 设置支持的所有操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getActions() 获取当前状态能进行的操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActions(array $Actions) 设置当前状态能进行的操作
注意：此字段可能返回 null，表示取不到有效值。
 * @method Options getOptions() 获取同步选项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOptions(Options $Options) 设置同步选项
注意：此字段可能返回 null，表示取不到有效值。
 * @method Objects getObjects() 获取同步库表对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjects(Objects $Objects) 设置同步库表对象
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSpecification() 获取任务规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpecification(string $Specification) 设置任务规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取过期时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置过期时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcRegion() 获取源端地域，如：ap-guangzhou等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcRegion(string $SrcRegion) 设置源端地域，如：ap-guangzhou等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcDatabaseType() 获取源端数据库类型，mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcDatabaseType(string $SrcDatabaseType) 设置源端数据库类型，mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSrcAccessType() 获取源端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcAccessType(string $SrcAccessType) 设置源端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)
注意：此字段可能返回 null，表示取不到有效值。
 * @method Endpoint getSrcInfo() 获取源端信息，单节点数据库使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSrcInfo(Endpoint $SrcInfo) 设置源端信息，单节点数据库使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDstRegion() 获取目标端地域，如：ap-guangzhou等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstRegion(string $DstRegion) 设置目标端地域，如：ap-guangzhou等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDstDatabaseType() 获取目标端数据库类型，mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql等
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstDatabaseType(string $DstDatabaseType) 设置目标端数据库类型，mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql等
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDstAccessType() 获取目标端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstAccessType(string $DstAccessType) 设置目标端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)
注意：此字段可能返回 null，表示取不到有效值。
 * @method Endpoint getDstInfo() 获取目标端信息，单节点数据库使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDstInfo(Endpoint $DstInfo) 设置目标端信息，单节点数据库使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取开始时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置开始时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态，UnInitialized(未初始化)、Initialized(已初始化)、Checking(校验中)、CheckPass(校验通过)、CheckNotPass(校验不通过)、ReadyRunning(准备运行)、Running(运行中)、Pausing(暂停中)、Paused(已暂停)、Stopping(停止中)、Stopped(已结束)、ResumableErr(任务错误)、Resuming(恢复中)、Failed(失败)、Released(已释放)、Resetting(重置中)、Unknown(未知)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置任务状态，UnInitialized(未初始化)、Initialized(已初始化)、Checking(校验中)、CheckPass(校验通过)、CheckNotPass(校验不通过)、ReadyRunning(准备运行)、Running(运行中)、Pausing(暂停中)、Paused(已暂停)、Stopping(停止中)、Stopped(已结束)、ResumableErr(任务错误)、Resuming(恢复中)、Failed(失败)、Released(已释放)、Resetting(重置中)、Unknown(未知)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签相关信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method SyncDetailInfo getDetail() 获取同步任务运行步骤信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetail(SyncDetailInfo $Detail) 设置同步任务运行步骤信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTradeStatus() 获取用于计费的状态，可能取值有：Normal(正常状态)、Resizing(变配中)、Renewing(续费中)、Isolating(隔离中)、Isolated(已隔离)、Offlining(下线中)、Offlined(已下线)、NotBilled(未计费)、Recovering(解隔离)、PostPay2Prepaying(按量计费转包年包月中)、PrePay2Postpaying(包年包月转按量计费中)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTradeStatus(string $TradeStatus) 设置用于计费的状态，可能取值有：Normal(正常状态)、Resizing(变配中)、Renewing(续费中)、Isolating(隔离中)、Isolated(已隔离)、Offlining(下线中)、Offlined(已下线)、NotBilled(未计费)、Recovering(解隔离)、PostPay2Prepaying(按量计费转包年包月中)、PrePay2Postpaying(包年包月转按量计费中)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceClass() 获取同步链路规格，如micro,small,medium,large
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceClass(string $InstanceClass) 设置同步链路规格，如micro,small,medium,large
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenew() 获取自动续费标识，当PayMode值为PrePay则此项配置有意义，取值为：1（表示自动续费）、0（不自动续费）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenew(integer $AutoRenew) 设置自动续费标识，当PayMode值为PrePay则此项配置有意义，取值为：1（表示自动续费）、0（不自动续费）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOfflineTime() 获取下线时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOfflineTime(string $OfflineTime) 设置下线时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRetryTimeRangeMinutes() 获取自动重试时间段设置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRetryTimeRangeMinutes(integer $AutoRetryTimeRangeMinutes) 设置自动重试时间段设置
注意：此字段可能返回 null，表示取不到有效值。
 */
class SyncJobInfo extends AbstractModel
{
    /**
     * @var string 同步任务id，如：sync-btso140
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 同步任务名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobName;

    /**
     * @var string 付款方式，PostPay(按量付费)、PrePay(包年包月)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayMode;

    /**
     * @var string 运行模式，Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunMode;

    /**
     * @var string 期待运行时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpectRunTime;

    /**
     * @var array 支持的所有操作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllActions;

    /**
     * @var array 当前状态能进行的操作
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Actions;

    /**
     * @var Options 同步选项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Options;

    /**
     * @var Objects 同步库表对象
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Objects;

    /**
     * @var string 任务规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Specification;

    /**
     * @var string 过期时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 源端地域，如：ap-guangzhou等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcRegion;

    /**
     * @var string 源端数据库类型，mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcDatabaseType;

    /**
     * @var string 源端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcAccessType;

    /**
     * @var Endpoint 源端信息，单节点数据库使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SrcInfo;

    /**
     * @var string 目标端地域，如：ap-guangzhou等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstRegion;

    /**
     * @var string 目标端数据库类型，mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql等
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstDatabaseType;

    /**
     * @var string 目标端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstAccessType;

    /**
     * @var Endpoint 目标端信息，单节点数据库使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DstInfo;

    /**
     * @var string 创建时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 开始时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string 任务状态，UnInitialized(未初始化)、Initialized(已初始化)、Checking(校验中)、CheckPass(校验通过)、CheckNotPass(校验不通过)、ReadyRunning(准备运行)、Running(运行中)、Pausing(暂停中)、Paused(已暂停)、Stopping(停止中)、Stopped(已结束)、ResumableErr(任务错误)、Resuming(恢复中)、Failed(失败)、Released(已释放)、Resetting(重置中)、Unknown(未知)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 结束时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var array 标签相关信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var SyncDetailInfo 同步任务运行步骤信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Detail;

    /**
     * @var string 用于计费的状态，可能取值有：Normal(正常状态)、Resizing(变配中)、Renewing(续费中)、Isolating(隔离中)、Isolated(已隔离)、Offlining(下线中)、Offlined(已下线)、NotBilled(未计费)、Recovering(解隔离)、PostPay2Prepaying(按量计费转包年包月中)、PrePay2Postpaying(包年包月转按量计费中)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TradeStatus;

    /**
     * @var string 同步链路规格，如micro,small,medium,large
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceClass;

    /**
     * @var integer 自动续费标识，当PayMode值为PrePay则此项配置有意义，取值为：1（表示自动续费）、0（不自动续费）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenew;

    /**
     * @var string 下线时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OfflineTime;

    /**
     * @var integer 自动重试时间段设置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRetryTimeRangeMinutes;

    /**
     * @param string $JobId 同步任务id，如：sync-btso140
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobName 同步任务名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayMode 付款方式，PostPay(按量付费)、PrePay(包年包月)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunMode 运行模式，Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpectRunTime 期待运行时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AllActions 支持的所有操作
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Actions 当前状态能进行的操作
注意：此字段可能返回 null，表示取不到有效值。
     * @param Options $Options 同步选项
注意：此字段可能返回 null，表示取不到有效值。
     * @param Objects $Objects 同步库表对象
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Specification 任务规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 过期时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcRegion 源端地域，如：ap-guangzhou等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcDatabaseType 源端数据库类型，mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SrcAccessType 源端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)
注意：此字段可能返回 null，表示取不到有效值。
     * @param Endpoint $SrcInfo 源端信息，单节点数据库使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DstRegion 目标端地域，如：ap-guangzhou等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DstDatabaseType 目标端数据库类型，mysql,cynosdbmysql,tdapg,tdpg,tdsqlmysql等
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DstAccessType 目标端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)
注意：此字段可能返回 null，表示取不到有效值。
     * @param Endpoint $DstInfo 目标端信息，单节点数据库使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 开始时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态，UnInitialized(未初始化)、Initialized(已初始化)、Checking(校验中)、CheckPass(校验通过)、CheckNotPass(校验不通过)、ReadyRunning(准备运行)、Running(运行中)、Pausing(暂停中)、Paused(已暂停)、Stopping(停止中)、Stopped(已结束)、ResumableErr(任务错误)、Resuming(恢复中)、Failed(失败)、Released(已释放)、Resetting(重置中)、Unknown(未知)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签相关信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param SyncDetailInfo $Detail 同步任务运行步骤信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TradeStatus 用于计费的状态，可能取值有：Normal(正常状态)、Resizing(变配中)、Renewing(续费中)、Isolating(隔离中)、Isolated(已隔离)、Offlining(下线中)、Offlined(已下线)、NotBilled(未计费)、Recovering(解隔离)、PostPay2Prepaying(按量计费转包年包月中)、PrePay2Postpaying(包年包月转按量计费中)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceClass 同步链路规格，如micro,small,medium,large
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenew 自动续费标识，当PayMode值为PrePay则此项配置有意义，取值为：1（表示自动续费）、0（不自动续费）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OfflineTime 下线时间，格式为 yyyy-mm-dd hh:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRetryTimeRangeMinutes 自动重试时间段设置
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("ExpectRunTime",$param) and $param["ExpectRunTime"] !== null) {
            $this->ExpectRunTime = $param["ExpectRunTime"];
        }

        if (array_key_exists("AllActions",$param) and $param["AllActions"] !== null) {
            $this->AllActions = $param["AllActions"];
        }

        if (array_key_exists("Actions",$param) and $param["Actions"] !== null) {
            $this->Actions = $param["Actions"];
        }

        if (array_key_exists("Options",$param) and $param["Options"] !== null) {
            $this->Options = new Options();
            $this->Options->deserialize($param["Options"]);
        }

        if (array_key_exists("Objects",$param) and $param["Objects"] !== null) {
            $this->Objects = new Objects();
            $this->Objects->deserialize($param["Objects"]);
        }

        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("SrcRegion",$param) and $param["SrcRegion"] !== null) {
            $this->SrcRegion = $param["SrcRegion"];
        }

        if (array_key_exists("SrcDatabaseType",$param) and $param["SrcDatabaseType"] !== null) {
            $this->SrcDatabaseType = $param["SrcDatabaseType"];
        }

        if (array_key_exists("SrcAccessType",$param) and $param["SrcAccessType"] !== null) {
            $this->SrcAccessType = $param["SrcAccessType"];
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new Endpoint();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstRegion",$param) and $param["DstRegion"] !== null) {
            $this->DstRegion = $param["DstRegion"];
        }

        if (array_key_exists("DstDatabaseType",$param) and $param["DstDatabaseType"] !== null) {
            $this->DstDatabaseType = $param["DstDatabaseType"];
        }

        if (array_key_exists("DstAccessType",$param) and $param["DstAccessType"] !== null) {
            $this->DstAccessType = $param["DstAccessType"];
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new Endpoint();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("Detail",$param) and $param["Detail"] !== null) {
            $this->Detail = new SyncDetailInfo();
            $this->Detail->deserialize($param["Detail"]);
        }

        if (array_key_exists("TradeStatus",$param) and $param["TradeStatus"] !== null) {
            $this->TradeStatus = $param["TradeStatus"];
        }

        if (array_key_exists("InstanceClass",$param) and $param["InstanceClass"] !== null) {
            $this->InstanceClass = $param["InstanceClass"];
        }

        if (array_key_exists("AutoRenew",$param) and $param["AutoRenew"] !== null) {
            $this->AutoRenew = $param["AutoRenew"];
        }

        if (array_key_exists("OfflineTime",$param) and $param["OfflineTime"] !== null) {
            $this->OfflineTime = $param["OfflineTime"];
        }

        if (array_key_exists("AutoRetryTimeRangeMinutes",$param) and $param["AutoRetryTimeRangeMinutes"] !== null) {
            $this->AutoRetryTimeRangeMinutes = $param["AutoRetryTimeRangeMinutes"];
        }
    }
}
