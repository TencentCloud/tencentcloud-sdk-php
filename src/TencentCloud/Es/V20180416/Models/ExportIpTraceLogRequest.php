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
 * @method string getInstanceId() 获取ES集群ID
 * @method void setInstanceId(string $InstanceId) 设置ES集群ID
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getOffset() 获取起始偏移量
 * @method void setOffset(integer $Offset) 设置起始偏移量
 * @method integer getLimit() 获取数据条数
 * @method void setLimit(integer $Limit) 设置数据条数
 * @method array getRemoteIp() 获取访问IP
 * @method void setRemoteIp(array $RemoteIp) 设置访问IP
 * @method array getTraceType() 获取Request/Response 请求/返回, 非必填
 * @method void setTraceType(array $TraceType) 设置Request/Response 请求/返回, 非必填
 * @method array getNetType() 获取Public/Private 公网访问/内网访问, 非必填
 * @method void setNetType(array $NetType) 设置Public/Private 公网访问/内网访问, 非必填
 * @method array getReqTypeOrRspStatus() 获取POST/GET/PUT/DELETE/HEAD/OPTIONS/PATCH/CONNECT/TRACE/CONNECT等, 非必填
 * @method void setReqTypeOrRspStatus(array $ReqTypeOrRspStatus) 设置POST/GET/PUT/DELETE/HEAD/OPTIONS/PATCH/CONNECT/TRACE/CONNECT等, 非必填
 * @method string getSearchKey() 获取关键字模糊查询，支持Lucene Query String
 * @method void setSearchKey(string $SearchKey) 设置关键字模糊查询，支持Lucene Query String
 * @method string getUri() 获取uri搜索
 * @method void setUri(string $Uri) 设置uri搜索
 * @method array getNodeIp() 获取集群节点IP
 * @method void setNodeIp(array $NodeIp) 设置集群节点IP
 */
class ExportIpTraceLogRequest extends AbstractModel
{
    /**
     * @var string ES集群ID
     */
    public $InstanceId;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 起始偏移量
     */
    public $Offset;

    /**
     * @var integer 数据条数
     */
    public $Limit;

    /**
     * @var array 访问IP
     */
    public $RemoteIp;

    /**
     * @var array Request/Response 请求/返回, 非必填
     */
    public $TraceType;

    /**
     * @var array Public/Private 公网访问/内网访问, 非必填
     */
    public $NetType;

    /**
     * @var array POST/GET/PUT/DELETE/HEAD/OPTIONS/PATCH/CONNECT/TRACE/CONNECT等, 非必填
     */
    public $ReqTypeOrRspStatus;

    /**
     * @var string 关键字模糊查询，支持Lucene Query String
     */
    public $SearchKey;

    /**
     * @var string uri搜索
     */
    public $Uri;

    /**
     * @var array 集群节点IP
     */
    public $NodeIp;

    /**
     * @param string $InstanceId ES集群ID
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $Offset 起始偏移量
     * @param integer $Limit 数据条数
     * @param array $RemoteIp 访问IP
     * @param array $TraceType Request/Response 请求/返回, 非必填
     * @param array $NetType Public/Private 公网访问/内网访问, 非必填
     * @param array $ReqTypeOrRspStatus POST/GET/PUT/DELETE/HEAD/OPTIONS/PATCH/CONNECT/TRACE/CONNECT等, 非必填
     * @param string $SearchKey 关键字模糊查询，支持Lucene Query String
     * @param string $Uri uri搜索
     * @param array $NodeIp 集群节点IP
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
