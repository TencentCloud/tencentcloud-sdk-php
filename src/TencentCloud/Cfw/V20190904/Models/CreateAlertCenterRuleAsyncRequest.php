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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAlertCenterRuleAsync请求参数结构体
 *
 * @method integer getHandleTime() 获取<p>处置时间<br>1  1天<br>7   7天<br>-2 永久</p>
 * @method void setHandleTime(integer $HandleTime) 设置<p>处置时间<br>1  1天<br>7   7天<br>-2 永久</p>
 * @method integer getHandleType() 获取<p>处置类型<br>当HandleIdList 不为空时：1封禁 2放通<br>当HandleIpList 不为空时：3放通 4封禁</p>
 * @method void setHandleType(integer $HandleType) 设置<p>处置类型<br>当HandleIdList 不为空时：1封禁 2放通<br>当HandleIpList 不为空时：3放通 4封禁</p>
 * @method integer getAlertDirection() 获取<p>当前日志方向： 0 出向 1 入向</p>
 * @method void setAlertDirection(integer $AlertDirection) 设置<p>当前日志方向： 0 出向 1 入向</p>
 * @method string getHandleDirection() 获取<p>处置方向： 0出向 1入向 0,1出入向 3内网</p>
 * @method void setHandleDirection(string $HandleDirection) 设置<p>处置方向： 0出向 1入向 0,1出入向 3内网</p>
 * @method string getCfwAiAgentOperationSource() 获取<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
 * @method void setCfwAiAgentOperationSource(string $CfwAiAgentOperationSource) 设置<p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
 * @method array getHandleIdList() 获取<p>处置对象,ID列表，  IdLists,IpList,EventIdList三选一</p>
 * @method void setHandleIdList(array $HandleIdList) 设置<p>处置对象,ID列表，  IdLists,IpList,EventIdList三选一</p>
 * @method array getHandleIpList() 获取<p>处置对象,IP列表，  IdLists,IpList,EventIdList三选一</p>
 * @method void setHandleIpList(array $HandleIpList) 设置<p>处置对象,IP列表，  IdLists,IpList,EventIdList三选一</p>
 * @method string getHandleComment() 获取<p>处置描述</p>
 * @method void setHandleComment(string $HandleComment) 设置<p>处置描述</p>
 * @method integer getIgnoreReason() 获取<p>放通原因:<br>0默认 1重复 2误报 3紧急放通</p>
 * @method void setIgnoreReason(integer $IgnoreReason) 设置<p>放通原因:<br>0默认 1重复 2误报 3紧急放通</p>
 * @method string getBlockDomain() 获取<p>封禁域名-保留字段</p>
 * @method void setBlockDomain(string $BlockDomain) 设置<p>封禁域名-保留字段</p>
 * @method array getHandleEventIdList() 获取<p>处置对象,事件ID列表，  IdLists,IpList,EventIdList三选一</p>
 * @method void setHandleEventIdList(array $HandleEventIdList) 设置<p>处置对象,事件ID列表，  IdLists,IpList,EventIdList三选一</p>
 * @method array getWhiteIpList() 获取<p>加白IP列表 隔离时放通的ip列表</p>
 * @method void setWhiteIpList(array $WhiteIpList) 设置<p>加白IP列表 隔离时放通的ip列表</p>
 * @method array getIsolateType() 获取<p>隔离类型 1 互联网入站 2 互联网出站 4 内网访问</p>
 * @method void setIsolateType(array $IsolateType) 设置<p>隔离类型 1 互联网入站 2 互联网出站 4 内网访问</p>
 * @method array getAssetIdList() 获取<p>隔离资产列表</p>
 * @method void setAssetIdList(array $AssetIdList) 设置<p>隔离资产列表</p>
 * @method array getTargetEventIdList() 获取<p>处置HandleIpList，属于的告警事件ID</p>
 * @method void setTargetEventIdList(array $TargetEventIdList) 设置<p>处置HandleIpList，属于的告警事件ID</p>
 */
class CreateAlertCenterRuleAsyncRequest extends AbstractModel
{
    /**
     * @var integer <p>处置时间<br>1  1天<br>7   7天<br>-2 永久</p>
     */
    public $HandleTime;

    /**
     * @var integer <p>处置类型<br>当HandleIdList 不为空时：1封禁 2放通<br>当HandleIpList 不为空时：3放通 4封禁</p>
     */
    public $HandleType;

    /**
     * @var integer <p>当前日志方向： 0 出向 1 入向</p>
     */
    public $AlertDirection;

    /**
     * @var string <p>处置方向： 0出向 1入向 0,1出入向 3内网</p>
     */
    public $HandleDirection;

    /**
     * @var string <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
     */
    public $CfwAiAgentOperationSource;

    /**
     * @var array <p>处置对象,ID列表，  IdLists,IpList,EventIdList三选一</p>
     */
    public $HandleIdList;

    /**
     * @var array <p>处置对象,IP列表，  IdLists,IpList,EventIdList三选一</p>
     */
    public $HandleIpList;

    /**
     * @var string <p>处置描述</p>
     */
    public $HandleComment;

    /**
     * @var integer <p>放通原因:<br>0默认 1重复 2误报 3紧急放通</p>
     */
    public $IgnoreReason;

    /**
     * @var string <p>封禁域名-保留字段</p>
     */
    public $BlockDomain;

    /**
     * @var array <p>处置对象,事件ID列表，  IdLists,IpList,EventIdList三选一</p>
     */
    public $HandleEventIdList;

    /**
     * @var array <p>加白IP列表 隔离时放通的ip列表</p>
     */
    public $WhiteIpList;

    /**
     * @var array <p>隔离类型 1 互联网入站 2 互联网出站 4 内网访问</p>
     */
    public $IsolateType;

    /**
     * @var array <p>隔离资产列表</p>
     */
    public $AssetIdList;

    /**
     * @var array <p>处置HandleIpList，属于的告警事件ID</p>
     */
    public $TargetEventIdList;

    /**
     * @param integer $HandleTime <p>处置时间<br>1  1天<br>7   7天<br>-2 永久</p>
     * @param integer $HandleType <p>处置类型<br>当HandleIdList 不为空时：1封禁 2放通<br>当HandleIpList 不为空时：3放通 4封禁</p>
     * @param integer $AlertDirection <p>当前日志方向： 0 出向 1 入向</p>
     * @param string $HandleDirection <p>处置方向： 0出向 1入向 0,1出入向 3内网</p>
     * @param string $CfwAiAgentOperationSource <p>AI操作来源</p><p>枚举值：</p><ul><li>console： 控制台来源值</li><li>wechat： 微信</li></ul>
     * @param array $HandleIdList <p>处置对象,ID列表，  IdLists,IpList,EventIdList三选一</p>
     * @param array $HandleIpList <p>处置对象,IP列表，  IdLists,IpList,EventIdList三选一</p>
     * @param string $HandleComment <p>处置描述</p>
     * @param integer $IgnoreReason <p>放通原因:<br>0默认 1重复 2误报 3紧急放通</p>
     * @param string $BlockDomain <p>封禁域名-保留字段</p>
     * @param array $HandleEventIdList <p>处置对象,事件ID列表，  IdLists,IpList,EventIdList三选一</p>
     * @param array $WhiteIpList <p>加白IP列表 隔离时放通的ip列表</p>
     * @param array $IsolateType <p>隔离类型 1 互联网入站 2 互联网出站 4 内网访问</p>
     * @param array $AssetIdList <p>隔离资产列表</p>
     * @param array $TargetEventIdList <p>处置HandleIpList，属于的告警事件ID</p>
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
        if (array_key_exists("HandleTime",$param) and $param["HandleTime"] !== null) {
            $this->HandleTime = $param["HandleTime"];
        }

        if (array_key_exists("HandleType",$param) and $param["HandleType"] !== null) {
            $this->HandleType = $param["HandleType"];
        }

        if (array_key_exists("AlertDirection",$param) and $param["AlertDirection"] !== null) {
            $this->AlertDirection = $param["AlertDirection"];
        }

        if (array_key_exists("HandleDirection",$param) and $param["HandleDirection"] !== null) {
            $this->HandleDirection = $param["HandleDirection"];
        }

        if (array_key_exists("CfwAiAgentOperationSource",$param) and $param["CfwAiAgentOperationSource"] !== null) {
            $this->CfwAiAgentOperationSource = $param["CfwAiAgentOperationSource"];
        }

        if (array_key_exists("HandleIdList",$param) and $param["HandleIdList"] !== null) {
            $this->HandleIdList = $param["HandleIdList"];
        }

        if (array_key_exists("HandleIpList",$param) and $param["HandleIpList"] !== null) {
            $this->HandleIpList = $param["HandleIpList"];
        }

        if (array_key_exists("HandleComment",$param) and $param["HandleComment"] !== null) {
            $this->HandleComment = $param["HandleComment"];
        }

        if (array_key_exists("IgnoreReason",$param) and $param["IgnoreReason"] !== null) {
            $this->IgnoreReason = $param["IgnoreReason"];
        }

        if (array_key_exists("BlockDomain",$param) and $param["BlockDomain"] !== null) {
            $this->BlockDomain = $param["BlockDomain"];
        }

        if (array_key_exists("HandleEventIdList",$param) and $param["HandleEventIdList"] !== null) {
            $this->HandleEventIdList = $param["HandleEventIdList"];
        }

        if (array_key_exists("WhiteIpList",$param) and $param["WhiteIpList"] !== null) {
            $this->WhiteIpList = $param["WhiteIpList"];
        }

        if (array_key_exists("IsolateType",$param) and $param["IsolateType"] !== null) {
            $this->IsolateType = $param["IsolateType"];
        }

        if (array_key_exists("AssetIdList",$param) and $param["AssetIdList"] !== null) {
            $this->AssetIdList = $param["AssetIdList"];
        }

        if (array_key_exists("TargetEventIdList",$param) and $param["TargetEventIdList"] !== null) {
            $this->TargetEventIdList = $param["TargetEventIdList"];
        }
    }
}
