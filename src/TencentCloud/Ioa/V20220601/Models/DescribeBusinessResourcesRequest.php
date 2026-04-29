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
 * @method integer getAreaId() 获取资源模块Id
 * @method void setAreaId(integer $AreaId) 设置资源模块Id
 * @method string getServiceName() 获取搜索的业务资源名称
 * @method void setServiceName(string $ServiceName) 设置搜索的业务资源名称
 * @method string getStartTime() 获取获取业务资源列表的开始时间，时间格式：2006-01-02
 * @method void setStartTime(string $StartTime) 设置获取业务资源列表的开始时间，时间格式：2006-01-02
 * @method string getKeywords() 获取搜索关键字
 * @method void setKeywords(string $Keywords) 设置搜索关键字
 * @method string getEndTime() 获取获取业务资源列表的结束时间，时间格式：2006-01-02
 * @method void setEndTime(string $EndTime) 设置获取业务资源列表的结束时间，时间格式：2006-01-02
 * @method Condition getCondition() 获取滤条件、分页参数。分页内容不传，默认获取第1页，10条数据
排序条件
<li>CreateTime - string - 是否必填：否 - 排序支持：是 - 按业务资源创建时间排序。</li>
<li>Levels - int - 是否必填：否 - 排序支持：是 - 按业务资源优先级排序。</li>
<li>ReachableState - int - 是否必填：否 - 排序支持：是 - 按业务资源连通性排序(私有化版本不支持)。</li>
 * @method void setCondition(Condition $Condition) 设置滤条件、分页参数。分页内容不传，默认获取第1页，10条数据
排序条件
<li>CreateTime - string - 是否必填：否 - 排序支持：是 - 按业务资源创建时间排序。</li>
<li>Levels - int - 是否必填：否 - 排序支持：是 - 按业务资源优先级排序。</li>
<li>ReachableState - int - 是否必填：否 - 排序支持：是 - 按业务资源连通性排序(私有化版本不支持)。</li>
 * @method string getAccessType() 获取资源类型
 * @method void setAccessType(string $AccessType) 设置资源类型
 * @method string getFrontAddr() 获取web资源前端地址
 * @method void setFrontAddr(string $FrontAddr) 设置web资源前端地址
 */
class DescribeBusinessResourcesRequest extends AbstractModel
{
    /**
     * @var integer 资源模块Id
     */
    public $AreaId;

    /**
     * @var string 搜索的业务资源名称
     */
    public $ServiceName;

    /**
     * @var string 获取业务资源列表的开始时间，时间格式：2006-01-02
     */
    public $StartTime;

    /**
     * @var string 搜索关键字
     */
    public $Keywords;

    /**
     * @var string 获取业务资源列表的结束时间，时间格式：2006-01-02
     */
    public $EndTime;

    /**
     * @var Condition 滤条件、分页参数。分页内容不传，默认获取第1页，10条数据
排序条件
<li>CreateTime - string - 是否必填：否 - 排序支持：是 - 按业务资源创建时间排序。</li>
<li>Levels - int - 是否必填：否 - 排序支持：是 - 按业务资源优先级排序。</li>
<li>ReachableState - int - 是否必填：否 - 排序支持：是 - 按业务资源连通性排序(私有化版本不支持)。</li>
     */
    public $Condition;

    /**
     * @var string 资源类型
     */
    public $AccessType;

    /**
     * @var string web资源前端地址
     */
    public $FrontAddr;

    /**
     * @param integer $AreaId 资源模块Id
     * @param string $ServiceName 搜索的业务资源名称
     * @param string $StartTime 获取业务资源列表的开始时间，时间格式：2006-01-02
     * @param string $Keywords 搜索关键字
     * @param string $EndTime 获取业务资源列表的结束时间，时间格式：2006-01-02
     * @param Condition $Condition 滤条件、分页参数。分页内容不传，默认获取第1页，10条数据
排序条件
<li>CreateTime - string - 是否必填：否 - 排序支持：是 - 按业务资源创建时间排序。</li>
<li>Levels - int - 是否必填：否 - 排序支持：是 - 按业务资源优先级排序。</li>
<li>ReachableState - int - 是否必填：否 - 排序支持：是 - 按业务资源连通性排序(私有化版本不支持)。</li>
     * @param string $AccessType 资源类型
     * @param string $FrontAddr web资源前端地址
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
        if (array_key_exists("AreaId",$param) and $param["AreaId"] !== null) {
            $this->AreaId = $param["AreaId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = $param["Keywords"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new Condition();
            $this->Condition->deserialize($param["Condition"]);
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("FrontAddr",$param) and $param["FrontAddr"] !== null) {
            $this->FrontAddr = $param["FrontAddr"];
        }
    }
}
