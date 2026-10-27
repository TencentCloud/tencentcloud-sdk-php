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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBusinessResources请求参数结构体
 *
 * @method Condition getCondition() 获取<p>滤条件、分页参数。分页内容不传，默认获取第1页，10条数据<br>排序条件</p><li>CreateTime - string - 是否必填：否 - 排序支持：是 - 按业务资源创建时间排序。</li><li>Levels - int - 是否必填：否 - 排序支持：是 - 按业务资源优先级排序。</li><li>ReachableState - int - 是否必填：否 - 排序支持：是 - 按业务资源连通性排序(私有化版本不支持)。</li>
 * @method void setCondition(Condition $Condition) 设置<p>滤条件、分页参数。分页内容不传，默认获取第1页，10条数据<br>排序条件</p><li>CreateTime - string - 是否必填：否 - 排序支持：是 - 按业务资源创建时间排序。</li><li>Levels - int - 是否必填：否 - 排序支持：是 - 按业务资源优先级排序。</li><li>ReachableState - int - 是否必填：否 - 排序支持：是 - 按业务资源连通性排序(私有化版本不支持)。</li>
 * @method integer getAreaId() 获取<p>资源模块Id</p>
 * @method void setAreaId(integer $AreaId) 设置<p>资源模块Id</p>
 * @method string getServiceName() 获取<p>服务名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务名称</p>
 * @method string getKeywords() 获取<p>搜索关键字</p>
 * @method void setKeywords(string $Keywords) 设置<p>搜索关键字</p>
 * @method string getStartTime() 获取<p>获取业务资源列表的开始时间，时间格式：2006-01-02</p>
 * @method void setStartTime(string $StartTime) 设置<p>获取业务资源列表的开始时间，时间格式：2006-01-02</p>
 * @method string getEndTime() 获取<p>获取业务资源列表的结束时间，时间格式：2006-01-02</p>
 * @method void setEndTime(string $EndTime) 设置<p>获取业务资源列表的结束时间，时间格式：2006-01-02</p>
 * @method string getAccessType() 获取<p>资源类型</p>
 * @method void setAccessType(string $AccessType) 设置<p>资源类型</p>
 * @method string getFrontAddr() 获取<p>web资源前端地址</p>
 * @method void setFrontAddr(string $FrontAddr) 设置<p>web资源前端地址</p>
 */
class DescribeBusinessResourcesRequest extends AbstractModel
{
    /**
     * @var Condition <p>滤条件、分页参数。分页内容不传，默认获取第1页，10条数据<br>排序条件</p><li>CreateTime - string - 是否必填：否 - 排序支持：是 - 按业务资源创建时间排序。</li><li>Levels - int - 是否必填：否 - 排序支持：是 - 按业务资源优先级排序。</li><li>ReachableState - int - 是否必填：否 - 排序支持：是 - 按业务资源连通性排序(私有化版本不支持)。</li>
     */
    public $Condition;

    /**
     * @var integer <p>资源模块Id</p>
     */
    public $AreaId;

    /**
     * @var string <p>服务名称</p>
     */
    public $ServiceName;

    /**
     * @var string <p>搜索关键字</p>
     */
    public $Keywords;

    /**
     * @var string <p>获取业务资源列表的开始时间，时间格式：2006-01-02</p>
     */
    public $StartTime;

    /**
     * @var string <p>获取业务资源列表的结束时间，时间格式：2006-01-02</p>
     */
    public $EndTime;

    /**
     * @var string <p>资源类型</p>
     */
    public $AccessType;

    /**
     * @var string <p>web资源前端地址</p>
     */
    public $FrontAddr;

    /**
     * @param Condition $Condition <p>滤条件、分页参数。分页内容不传，默认获取第1页，10条数据<br>排序条件</p><li>CreateTime - string - 是否必填：否 - 排序支持：是 - 按业务资源创建时间排序。</li><li>Levels - int - 是否必填：否 - 排序支持：是 - 按业务资源优先级排序。</li><li>ReachableState - int - 是否必填：否 - 排序支持：是 - 按业务资源连通性排序(私有化版本不支持)。</li>
     * @param integer $AreaId <p>资源模块Id</p>
     * @param string $ServiceName <p>服务名称</p>
     * @param string $Keywords <p>搜索关键字</p>
     * @param string $StartTime <p>获取业务资源列表的开始时间，时间格式：2006-01-02</p>
     * @param string $EndTime <p>获取业务资源列表的结束时间，时间格式：2006-01-02</p>
     * @param string $AccessType <p>资源类型</p>
     * @param string $FrontAddr <p>web资源前端地址</p>
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
        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new Condition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("AreaId",$param) and $param["AreaId"] !== null) {
            $this->AreaId = $param["AreaId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("FrontAddr",$param) and $param["FrontAddr"] !== null) {
            $this->FrontAddr = $param["FrontAddr"];
        }
    }
}
