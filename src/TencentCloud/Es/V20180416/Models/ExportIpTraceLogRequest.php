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
namespace TencentCloud\Es\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportIpTraceLog请求参数结构体
 *
 * @method string getInstanceId() 获取<p>ES集群ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>ES集群ID</p>
 * @method string getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
 * @method string getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
 * @method integer getOffset() 获取<p>起始偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>起始偏移量</p>
 * @method integer getLimit() 获取<p>数据条数</p>
 * @method void setLimit(integer $Limit) 设置<p>数据条数</p>
 * @method array getRemoteIp() 获取<p>访问IP</p>
 * @method void setRemoteIp(array $RemoteIp) 设置<p>访问IP</p>
 * @method array getTraceType() 获取<p>Request/Response 请求/返回, 非必填</p>
 * @method void setTraceType(array $TraceType) 设置<p>Request/Response 请求/返回, 非必填</p>
 * @method array getNetType() 获取<p>Public/Private 公网访问/内网访问, 非必填</p>
 * @method void setNetType(array $NetType) 设置<p>Public/Private 公网访问/内网访问, 非必填</p>
 * @method array getReqTypeOrRspStatus() 获取<p>POST/GET/PUT/DELETE/HEAD/OPTIONS/PATCH/CONNECT/TRACE/CONNECT等, 非必填</p>
 * @method void setReqTypeOrRspStatus(array $ReqTypeOrRspStatus) 设置<p>POST/GET/PUT/DELETE/HEAD/OPTIONS/PATCH/CONNECT/TRACE/CONNECT等, 非必填</p>
 * @method string getSearchKey() 获取<p>关键字模糊查询，支持Lucene Query String</p>
 * @method void setSearchKey(string $SearchKey) 设置<p>关键字模糊查询，支持Lucene Query String</p>
 * @method string getUri() 获取<p>uri搜索</p>
 * @method void setUri(string $Uri) 设置<p>uri搜索</p>
 * @method array getNodeIp() 获取<p>集群节点IP</p>
 * @method void setNodeIp(array $NodeIp) 设置<p>集群节点IP</p>
 */
class ExportIpTraceLogRequest extends AbstractModel
{
    /**
     * @var string <p>ES集群ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>起始偏移量</p>
     */
    public $Offset;

    /**
     * @var integer <p>数据条数</p>
     */
    public $Limit;

    /**
     * @var array <p>访问IP</p>
     */
    public $RemoteIp;

    /**
     * @var array <p>Request/Response 请求/返回, 非必填</p>
     */
    public $TraceType;

    /**
     * @var array <p>Public/Private 公网访问/内网访问, 非必填</p>
     */
    public $NetType;

    /**
     * @var array <p>POST/GET/PUT/DELETE/HEAD/OPTIONS/PATCH/CONNECT/TRACE/CONNECT等, 非必填</p>
     */
    public $ReqTypeOrRspStatus;

    /**
     * @var string <p>关键字模糊查询，支持Lucene Query String</p>
     */
    public $SearchKey;

    /**
     * @var string <p>uri搜索</p>
     */
    public $Uri;

    /**
     * @var array <p>集群节点IP</p>
     */
    public $NodeIp;

    /**
     * @param string $InstanceId <p>ES集群ID</p>
     * @param string $StartTime <p>开始时间</p>
     * @param string $EndTime <p>结束时间</p>
     * @param integer $Offset <p>起始偏移量</p>
     * @param integer $Limit <p>数据条数</p>
     * @param array $RemoteIp <p>访问IP</p>
     * @param array $TraceType <p>Request/Response 请求/返回, 非必填</p>
     * @param array $NetType <p>Public/Private 公网访问/内网访问, 非必填</p>
     * @param array $ReqTypeOrRspStatus <p>POST/GET/PUT/DELETE/HEAD/OPTIONS/PATCH/CONNECT/TRACE/CONNECT等, 非必填</p>
     * @param string $SearchKey <p>关键字模糊查询，支持Lucene Query String</p>
     * @param string $Uri <p>uri搜索</p>
     * @param array $NodeIp <p>集群节点IP</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("RemoteIp",$param) and $param["RemoteIp"] !== null) {
            $this->RemoteIp = $param["RemoteIp"];
        }

        if (array_key_exists("TraceType",$param) and $param["TraceType"] !== null) {
            $this->TraceType = $param["TraceType"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("ReqTypeOrRspStatus",$param) and $param["ReqTypeOrRspStatus"] !== null) {
            $this->ReqTypeOrRspStatus = $param["ReqTypeOrRspStatus"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("Uri",$param) and $param["Uri"] !== null) {
            $this->Uri = $param["Uri"];
        }

        if (array_key_exists("NodeIp",$param) and $param["NodeIp"] !== null) {
            $this->NodeIp = $param["NodeIp"];
        }
    }
}
