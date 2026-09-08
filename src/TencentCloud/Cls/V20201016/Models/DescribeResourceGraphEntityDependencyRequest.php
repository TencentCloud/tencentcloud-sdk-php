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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourceGraphEntityDependency请求参数结构体
 *
 * @method string getResourceGraphId() 获取<p>资源图谱id</p>
 * @method void setResourceGraphId(string $ResourceGraphId) 设置<p>资源图谱id</p>
 * @method string getEntityId() 获取<p>实体id</p>
 * @method void setEntityId(string $EntityId) 设置<p>实体id</p>
 * @method integer getDepth() 获取<p>距离Entity的深度</p>
 * @method void setDepth(integer $Depth) 设置<p>距离Entity的深度</p>
 * @method integer getLimit() 获取<p>返回数量</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量</p>
 * @method integer getFromTime() 获取<p>查询范围-开始时间</p><p>单位：毫秒</p>
 * @method void setFromTime(integer $FromTime) 设置<p>查询范围-开始时间</p><p>单位：毫秒</p>
 * @method integer getToTime() 获取<p>查询范围-结束时间</p><p>单位：毫秒</p>
 * @method void setToTime(integer $ToTime) 设置<p>查询范围-结束时间</p><p>单位：毫秒</p>
 */
class DescribeResourceGraphEntityDependencyRequest extends AbstractModel
{
    /**
     * @var string <p>资源图谱id</p>
     */
    public $ResourceGraphId;

    /**
     * @var string <p>实体id</p>
     */
    public $EntityId;

    /**
     * @var integer <p>距离Entity的深度</p>
     */
    public $Depth;

    /**
     * @var integer <p>返回数量</p>
     */
    public $Limit;

    /**
     * @var integer <p>查询范围-开始时间</p><p>单位：毫秒</p>
     */
    public $FromTime;

    /**
     * @var integer <p>查询范围-结束时间</p><p>单位：毫秒</p>
     */
    public $ToTime;

    /**
     * @param string $ResourceGraphId <p>资源图谱id</p>
     * @param string $EntityId <p>实体id</p>
     * @param integer $Depth <p>距离Entity的深度</p>
     * @param integer $Limit <p>返回数量</p>
     * @param integer $FromTime <p>查询范围-开始时间</p><p>单位：毫秒</p>
     * @param integer $ToTime <p>查询范围-结束时间</p><p>单位：毫秒</p>
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
        if (array_key_exists("ResourceGraphId",$param) and $param["ResourceGraphId"] !== null) {
            $this->ResourceGraphId = $param["ResourceGraphId"];
        }

        if (array_key_exists("EntityId",$param) and $param["EntityId"] !== null) {
            $this->EntityId = $param["EntityId"];
        }

        if (array_key_exists("Depth",$param) and $param["Depth"] !== null) {
            $this->Depth = $param["Depth"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("FromTime",$param) and $param["FromTime"] !== null) {
            $this->FromTime = $param["FromTime"];
        }

        if (array_key_exists("ToTime",$param) and $param["ToTime"] !== null) {
            $this->ToTime = $param["ToTime"];
        }
    }
}
