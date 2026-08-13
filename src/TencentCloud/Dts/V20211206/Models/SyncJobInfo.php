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
 * 同步任务信息
 *
 * @method string getJobId() 获取<p>同步任务id，如：sync-btso140</p>
 * @method void setJobId(string $JobId) 设置<p>同步任务id，如：sync-btso140</p>
 * @method string getJobName() 获取<p>同步任务名</p>
 * @method void setJobName(string $JobName) 设置<p>同步任务名</p>
 * @method string getPayMode() 获取<p>付款方式，PostPay(按量付费)、PrePay(包年包月)</p>
 * @method void setPayMode(string $PayMode) 设置<p>付款方式，PostPay(按量付费)、PrePay(包年包月)</p>
 * @method string getRunMode() 获取<p>运行模式，Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)</p>
 * @method void setRunMode(string $RunMode) 设置<p>运行模式，Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)</p>
 * @method string getExpectRunTime() 获取<p>期待运行时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setExpectRunTime(string $ExpectRunTime) 设置<p>期待运行时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method array getAllActions() 获取<p>支持的所有操作</p>
 * @method void setAllActions(array $AllActions) 设置<p>支持的所有操作</p>
 * @method array getActions() 获取<p>当前状态能进行的操作</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setActions(array $Actions) 设置<p>当前状态能进行的操作</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Options getOptions() 获取<p>同步选项</p>
 * @method void setOptions(Options $Options) 设置<p>同步选项</p>
 * @method Objects getObjects() 获取<p>同步库表对象</p>
 * @method void setObjects(Objects $Objects) 设置<p>同步库表对象</p>
 * @method string getSpecification() 获取<p>任务规格</p>
 * @method void setSpecification(string $Specification) 设置<p>任务规格</p>
 * @method string getExpireTime() 获取<p>过期时间，格式为 yyyy-mm-dd hh:mm:ss</p>
 * @method void setExpireTime(string $ExpireTime) 设置<p>过期时间，格式为 yyyy-mm-dd hh:mm:ss</p>
 * @method string getSrcRegion() 获取<p>源端地域，如：ap-guangzhou等</p>
 * @method void setSrcRegion(string $SrcRegion) 设置<p>源端地域，如：ap-guangzhou等</p>
 * @method string getSrcDatabaseType() 获取<p>源端数据库类型，mysql,tdsqlmysql,mariadb,cynosdbmysql(表示tdsql-c实例),tdstore,percona,postgresql,mongodb等。</p>
 * @method void setSrcDatabaseType(string $SrcDatabaseType) 设置<p>源端数据库类型，mysql,tdsqlmysql,mariadb,cynosdbmysql(表示tdsql-c实例),tdstore,percona,postgresql,mongodb等。</p>
 * @method string getSrcAccessType() 获取<p>源端接入类型，cdb(云数据库)、cvm(云服务器自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)</p>
 * @method void setSrcAccessType(string $SrcAccessType) 设置<p>源端接入类型，cdb(云数据库)、cvm(云服务器自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)</p>
 * @method Endpoint getSrcInfo() 获取<p>源端信息，单节点数据库使用</p>
 * @method void setSrcInfo(Endpoint $SrcInfo) 设置<p>源端信息，单节点数据库使用</p>
 * @method string getSrcNodeType() 获取<p>枚举值：cluster、single。源库为单节点数据库使用single，多节点使用cluster</p>
 * @method void setSrcNodeType(string $SrcNodeType) 设置<p>枚举值：cluster、single。源库为单节点数据库使用single，多节点使用cluster</p>
 * @method SyncDBEndpointInfos getSrcInfos() 获取<p>源端信息，若SrcNodeType=cluster，则源端信息在这个字段里，mongodb链路使用此参数透传。</p>
 * @method void setSrcInfos(SyncDBEndpointInfos $SrcInfos) 设置<p>源端信息，若SrcNodeType=cluster，则源端信息在这个字段里，mongodb链路使用此参数透传。</p>
 * @method string getDstRegion() 获取<p>目标端地域，如：ap-guangzhou等</p>
 * @method void setDstRegion(string $DstRegion) 设置<p>目标端地域，如：ap-guangzhou等</p>
 * @method string getDstDatabaseType() 获取<p>目标端数据库类型，mysql,tdsqlmysql,mariadb,cynosdbmysql(表示tdsql-c实例),tdstore,percona,postgresql,mongodb等。</p>
 * @method void setDstDatabaseType(string $DstDatabaseType) 设置<p>目标端数据库类型，mysql,tdsqlmysql,mariadb,cynosdbmysql(表示tdsql-c实例),tdstore,percona,postgresql,mongodb等。</p>
 * @method string getDstAccessType() 获取<p>目标端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)</p>
 * @method void setDstAccessType(string $DstAccessType) 设置<p>目标端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)</p>
 * @method Endpoint getDstInfo() 获取<p>目标端信息，单节点数据库使用</p>
 * @method void setDstInfo(Endpoint $DstInfo) 设置<p>目标端信息，单节点数据库使用</p>
 * @method string getDstNodeType() 获取<p>枚举值：cluster、single。目标库为单节点数据库使用single，多节点使用cluster</p>
 * @method void setDstNodeType(string $DstNodeType) 设置<p>枚举值：cluster、single。目标库为单节点数据库使用single，多节点使用cluster</p>
 * @method SyncDBEndpointInfos getDstInfos() 获取<p>目标端信息，若SrcNodeType=cluster，则源端信息在这个字段里，mongodb链路使用此参数透传。</p>
 * @method void setDstInfos(SyncDBEndpointInfos $DstInfos) 设置<p>目标端信息，若SrcNodeType=cluster，则源端信息在这个字段里，mongodb链路使用此参数透传。</p>
 * @method string getCreateTime() 获取<p>创建时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getStartTime() 获取<p>开始时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getStatus() 获取<p>任务状态，UnInitialized(未初始化)、Initialized(已初始化)、Checking(校验中)、CheckPass(校验通过)、CheckNotPass(校验不通过)、ReadyRunning(准备运行)、Running(运行中)、Pausing(暂停中)、Paused(已暂停)、Stopping(停止中)、Stopped(已结束)、ResumableErr(任务错误)、Resuming(恢复中)、Failed(失败)、Released(已释放)、Resetting(重置中)、Unknown(未知)</p>
 * @method void setStatus(string $Status) 设置<p>任务状态，UnInitialized(未初始化)、Initialized(已初始化)、Checking(校验中)、CheckPass(校验通过)、CheckNotPass(校验不通过)、ReadyRunning(准备运行)、Running(运行中)、Pausing(暂停中)、Paused(已暂停)、Stopping(停止中)、Stopped(已结束)、ResumableErr(任务错误)、Resuming(恢复中)、Failed(失败)、Released(已释放)、Resetting(重置中)、Unknown(未知)</p>
 * @method string getEndTime() 获取<p>结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method array getTags() 获取<p>标签相关信息</p>
 * @method void setTags(array $Tags) 设置<p>标签相关信息</p>
 * @method SyncDetailInfo getDetail() 获取<p>同步任务运行步骤信息</p>
 * @method void setDetail(SyncDetailInfo $Detail) 设置<p>同步任务运行步骤信息</p>
 * @method string getTradeStatus() 获取<p>用于计费的状态，可能取值有：Normal(正常状态)、Resizing(变配中)、Renewing(续费中)、Isolating(隔离中)、Isolated(已隔离)、Offlining(下线中)、Offlined(已下线)、NotBilled(未计费)、Recovering(解隔离)、PostPay2Prepaying(按量计费转包年包月中)、PrePay2Postpaying(包年包月转按量计费中)</p>
 * @method void setTradeStatus(string $TradeStatus) 设置<p>用于计费的状态，可能取值有：Normal(正常状态)、Resizing(变配中)、Renewing(续费中)、Isolating(隔离中)、Isolated(已隔离)、Offlining(下线中)、Offlined(已下线)、NotBilled(未计费)、Recovering(解隔离)、PostPay2Prepaying(按量计费转包年包月中)、PrePay2Postpaying(包年包月转按量计费中)</p>
 * @method string getInstanceClass() 获取<p>同步链路规格，如micro,small,medium,large</p>
 * @method void setInstanceClass(string $InstanceClass) 设置<p>同步链路规格，如micro,small,medium,large</p>
 * @method integer getAutoRenew() 获取<p>自动续费标识，当PayMode值为PrePay则此项配置有意义，取值为：1（表示自动续费）、0（不自动续费）</p>
 * @method void setAutoRenew(integer $AutoRenew) 设置<p>自动续费标识，当PayMode值为PrePay则此项配置有意义，取值为：1（表示自动续费）、0（不自动续费）</p>
 * @method string getOfflineTime() 获取<p>下线时间，格式为 yyyy-mm-dd hh:mm:ss</p>
 * @method void setOfflineTime(string $OfflineTime) 设置<p>下线时间，格式为 yyyy-mm-dd hh:mm:ss</p>
 * @method string getOptObjStatus() 获取<p>动态修改对象，修改任务的状态等</p>
 * @method void setOptObjStatus(string $OptObjStatus) 设置<p>动态修改对象，修改任务的状态等</p>
 * @method integer getAutoRetryTimeRangeMinutes() 获取<p>自动重试时间段设置</p>
 * @method void setAutoRetryTimeRangeMinutes(integer $AutoRetryTimeRangeMinutes) 设置<p>自动重试时间段设置</p>
 * @method string getDumperResumeCtrl() 获取<p>全量导出可重入标识：enum::&quot;yes&quot;/&quot;no&quot;。yes表示当前任务可重入、no表示当前任务处于全量导出且不可重入阶段；如果在该值为no时重启任务导出流程不支持断点续传</p>
 * @method void setDumperResumeCtrl(string $DumperResumeCtrl) 设置<p>全量导出可重入标识：enum::&quot;yes&quot;/&quot;no&quot;。yes表示当前任务可重入、no表示当前任务处于全量导出且不可重入阶段；如果在该值为no时重启任务导出流程不支持断点续传</p>
 */
class SyncJobInfo extends AbstractModel
{
    /**
     * @var string <p>同步任务id，如：sync-btso140</p>
     */
    public $JobId;

    /**
     * @var string <p>同步任务名</p>
     */
    public $JobName;

    /**
     * @var string <p>付款方式，PostPay(按量付费)、PrePay(包年包月)</p>
     */
    public $PayMode;

    /**
     * @var string <p>运行模式，Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)</p>
     */
    public $RunMode;

    /**
     * @var string <p>期待运行时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $ExpectRunTime;

    /**
     * @var array <p>支持的所有操作</p>
     */
    public $AllActions;

    /**
     * @var array <p>当前状态能进行的操作</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Actions;

    /**
     * @var Options <p>同步选项</p>
     */
    public $Options;

    /**
     * @var Objects <p>同步库表对象</p>
     */
    public $Objects;

    /**
     * @var string <p>任务规格</p>
     */
    public $Specification;

    /**
     * @var string <p>过期时间，格式为 yyyy-mm-dd hh:mm:ss</p>
     */
    public $ExpireTime;

    /**
     * @var string <p>源端地域，如：ap-guangzhou等</p>
     */
    public $SrcRegion;

    /**
     * @var string <p>源端数据库类型，mysql,tdsqlmysql,mariadb,cynosdbmysql(表示tdsql-c实例),tdstore,percona,postgresql,mongodb等。</p>
     */
    public $SrcDatabaseType;

    /**
     * @var string <p>源端接入类型，cdb(云数据库)、cvm(云服务器自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)</p>
     */
    public $SrcAccessType;

    /**
     * @var Endpoint <p>源端信息，单节点数据库使用</p>
     */
    public $SrcInfo;

    /**
     * @var string <p>枚举值：cluster、single。源库为单节点数据库使用single，多节点使用cluster</p>
     */
    public $SrcNodeType;

    /**
     * @var SyncDBEndpointInfos <p>源端信息，若SrcNodeType=cluster，则源端信息在这个字段里，mongodb链路使用此参数透传。</p>
     */
    public $SrcInfos;

    /**
     * @var string <p>目标端地域，如：ap-guangzhou等</p>
     */
    public $DstRegion;

    /**
     * @var string <p>目标端数据库类型，mysql,tdsqlmysql,mariadb,cynosdbmysql(表示tdsql-c实例),tdstore,percona,postgresql,mongodb等。</p>
     */
    public $DstDatabaseType;

    /**
     * @var string <p>目标端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)</p>
     */
    public $DstAccessType;

    /**
     * @var Endpoint <p>目标端信息，单节点数据库使用</p>
     */
    public $DstInfo;

    /**
     * @var string <p>枚举值：cluster、single。目标库为单节点数据库使用single，多节点使用cluster</p>
     */
    public $DstNodeType;

    /**
     * @var SyncDBEndpointInfos <p>目标端信息，若SrcNodeType=cluster，则源端信息在这个字段里，mongodb链路使用此参数透传。</p>
     */
    public $DstInfos;

    /**
     * @var string <p>创建时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $CreateTime;

    /**
     * @var string <p>开始时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $StartTime;

    /**
     * @var string <p>任务状态，UnInitialized(未初始化)、Initialized(已初始化)、Checking(校验中)、CheckPass(校验通过)、CheckNotPass(校验不通过)、ReadyRunning(准备运行)、Running(运行中)、Pausing(暂停中)、Paused(已暂停)、Stopping(停止中)、Stopped(已结束)、ResumableErr(任务错误)、Resuming(恢复中)、Failed(失败)、Released(已释放)、Resetting(重置中)、Unknown(未知)</p>
     */
    public $Status;

    /**
     * @var string <p>结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $EndTime;

    /**
     * @var array <p>标签相关信息</p>
     */
    public $Tags;

    /**
     * @var SyncDetailInfo <p>同步任务运行步骤信息</p>
     */
    public $Detail;

    /**
     * @var string <p>用于计费的状态，可能取值有：Normal(正常状态)、Resizing(变配中)、Renewing(续费中)、Isolating(隔离中)、Isolated(已隔离)、Offlining(下线中)、Offlined(已下线)、NotBilled(未计费)、Recovering(解隔离)、PostPay2Prepaying(按量计费转包年包月中)、PrePay2Postpaying(包年包月转按量计费中)</p>
     */
    public $TradeStatus;

    /**
     * @var string <p>同步链路规格，如micro,small,medium,large</p>
     */
    public $InstanceClass;

    /**
     * @var integer <p>自动续费标识，当PayMode值为PrePay则此项配置有意义，取值为：1（表示自动续费）、0（不自动续费）</p>
     */
    public $AutoRenew;

    /**
     * @var string <p>下线时间，格式为 yyyy-mm-dd hh:mm:ss</p>
     */
    public $OfflineTime;

    /**
     * @var string <p>动态修改对象，修改任务的状态等</p>
     */
    public $OptObjStatus;

    /**
     * @var integer <p>自动重试时间段设置</p>
     */
    public $AutoRetryTimeRangeMinutes;

    /**
     * @var string <p>全量导出可重入标识：enum::&quot;yes&quot;/&quot;no&quot;。yes表示当前任务可重入、no表示当前任务处于全量导出且不可重入阶段；如果在该值为no时重启任务导出流程不支持断点续传</p>
     */
    public $DumperResumeCtrl;

    /**
     * @param string $JobId <p>同步任务id，如：sync-btso140</p>
     * @param string $JobName <p>同步任务名</p>
     * @param string $PayMode <p>付款方式，PostPay(按量付费)、PrePay(包年包月)</p>
     * @param string $RunMode <p>运行模式，Immediate(表示立即运行，默认为此项值)、Timed(表示定时运行)</p>
     * @param string $ExpectRunTime <p>期待运行时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param array $AllActions <p>支持的所有操作</p>
     * @param array $Actions <p>当前状态能进行的操作</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Options $Options <p>同步选项</p>
     * @param Objects $Objects <p>同步库表对象</p>
     * @param string $Specification <p>任务规格</p>
     * @param string $ExpireTime <p>过期时间，格式为 yyyy-mm-dd hh:mm:ss</p>
     * @param string $SrcRegion <p>源端地域，如：ap-guangzhou等</p>
     * @param string $SrcDatabaseType <p>源端数据库类型，mysql,tdsqlmysql,mariadb,cynosdbmysql(表示tdsql-c实例),tdstore,percona,postgresql,mongodb等。</p>
     * @param string $SrcAccessType <p>源端接入类型，cdb(云数据库)、cvm(云服务器自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)</p>
     * @param Endpoint $SrcInfo <p>源端信息，单节点数据库使用</p>
     * @param string $SrcNodeType <p>枚举值：cluster、single。源库为单节点数据库使用single，多节点使用cluster</p>
     * @param SyncDBEndpointInfos $SrcInfos <p>源端信息，若SrcNodeType=cluster，则源端信息在这个字段里，mongodb链路使用此参数透传。</p>
     * @param string $DstRegion <p>目标端地域，如：ap-guangzhou等</p>
     * @param string $DstDatabaseType <p>目标端数据库类型，mysql,tdsqlmysql,mariadb,cynosdbmysql(表示tdsql-c实例),tdstore,percona,postgresql,mongodb等。</p>
     * @param string $DstAccessType <p>目标端接入类型，cdb(云数据库)、cvm(云主机自建)、vpc(私有网络)、extranet(外网)、vpncloud(vpn接入)、dcg(专线接入)、ccn(云联网)、intranet(自研上云)</p>
     * @param Endpoint $DstInfo <p>目标端信息，单节点数据库使用</p>
     * @param string $DstNodeType <p>枚举值：cluster、single。目标库为单节点数据库使用single，多节点使用cluster</p>
     * @param SyncDBEndpointInfos $DstInfos <p>目标端信息，若SrcNodeType=cluster，则源端信息在这个字段里，mongodb链路使用此参数透传。</p>
     * @param string $CreateTime <p>创建时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $StartTime <p>开始时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $Status <p>任务状态，UnInitialized(未初始化)、Initialized(已初始化)、Checking(校验中)、CheckPass(校验通过)、CheckNotPass(校验不通过)、ReadyRunning(准备运行)、Running(运行中)、Pausing(暂停中)、Paused(已暂停)、Stopping(停止中)、Stopped(已结束)、ResumableErr(任务错误)、Resuming(恢复中)、Failed(失败)、Released(已释放)、Resetting(重置中)、Unknown(未知)</p>
     * @param string $EndTime <p>结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param array $Tags <p>标签相关信息</p>
     * @param SyncDetailInfo $Detail <p>同步任务运行步骤信息</p>
     * @param string $TradeStatus <p>用于计费的状态，可能取值有：Normal(正常状态)、Resizing(变配中)、Renewing(续费中)、Isolating(隔离中)、Isolated(已隔离)、Offlining(下线中)、Offlined(已下线)、NotBilled(未计费)、Recovering(解隔离)、PostPay2Prepaying(按量计费转包年包月中)、PrePay2Postpaying(包年包月转按量计费中)</p>
     * @param string $InstanceClass <p>同步链路规格，如micro,small,medium,large</p>
     * @param integer $AutoRenew <p>自动续费标识，当PayMode值为PrePay则此项配置有意义，取值为：1（表示自动续费）、0（不自动续费）</p>
     * @param string $OfflineTime <p>下线时间，格式为 yyyy-mm-dd hh:mm:ss</p>
     * @param string $OptObjStatus <p>动态修改对象，修改任务的状态等</p>
     * @param integer $AutoRetryTimeRangeMinutes <p>自动重试时间段设置</p>
     * @param string $DumperResumeCtrl <p>全量导出可重入标识：enum::&quot;yes&quot;/&quot;no&quot;。yes表示当前任务可重入、no表示当前任务处于全量导出且不可重入阶段；如果在该值为no时重启任务导出流程不支持断点续传</p>
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

        if (array_key_exists("SrcNodeType",$param) and $param["SrcNodeType"] !== null) {
            $this->SrcNodeType = $param["SrcNodeType"];
        }

        if (array_key_exists("SrcInfos",$param) and $param["SrcInfos"] !== null) {
            $this->SrcInfos = new SyncDBEndpointInfos();
            $this->SrcInfos->deserialize($param["SrcInfos"]);
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

        if (array_key_exists("DstNodeType",$param) and $param["DstNodeType"] !== null) {
            $this->DstNodeType = $param["DstNodeType"];
        }

        if (array_key_exists("DstInfos",$param) and $param["DstInfos"] !== null) {
            $this->DstInfos = new SyncDBEndpointInfos();
            $this->DstInfos->deserialize($param["DstInfos"]);
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

        if (array_key_exists("OptObjStatus",$param) and $param["OptObjStatus"] !== null) {
            $this->OptObjStatus = $param["OptObjStatus"];
        }

        if (array_key_exists("AutoRetryTimeRangeMinutes",$param) and $param["AutoRetryTimeRangeMinutes"] !== null) {
            $this->AutoRetryTimeRangeMinutes = $param["AutoRetryTimeRangeMinutes"];
        }

        if (array_key_exists("DumperResumeCtrl",$param) and $param["DumperResumeCtrl"] !== null) {
            $this->DumperResumeCtrl = $param["DumperResumeCtrl"];
        }
    }
}
