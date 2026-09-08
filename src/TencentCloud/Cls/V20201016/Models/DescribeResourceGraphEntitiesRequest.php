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
 * DescribeResourceGraphEntities请求参数结构体
 *
 * @method string getResourceGraphId() 获取<p>资源图谱id</p>
 * @method void setResourceGraphId(string $ResourceGraphId) 设置<p>资源图谱id</p>
 * @method array getFilters() 获取<ul><li>Product 按【产品分组】精确匹配，可用参数：all / business_service / tke / cdb / redis / mongodb 。类型：String。必选：否</li><li>EntityClassName 按【实体类型】精确匹配，可用参数：all / app.service.application / tc.tke.cluster / tc.tkex.project / tc.cdb.instance / tc.redis.instance / tc.mongodb.instance / k8s.cluster / k8s.namespace / k8s.node / k8s.pod / k8s.ip / k8s.service / k8s.deployment / k8s.statefulset / k8s.statefulsetplus / k8s.daemonset / k8s.storageclass / k8s.persistentvolume / k8s.persistentvolumeclaim / k8s.secret。类型：String。必选：否</li><li>Name 按【实体名称】模糊匹配。类型：String。必选：否</li><li>ResourceId 按 【实体资源id】精确匹配。类型：String。必选：否</li></ul><p>注意：每次请求的 Filters 上限 10。</p>
 * @method void setFilters(array $Filters) 设置<ul><li>Product 按【产品分组】精确匹配，可用参数：all / business_service / tke / cdb / redis / mongodb 。类型：String。必选：否</li><li>EntityClassName 按【实体类型】精确匹配，可用参数：all / app.service.application / tc.tke.cluster / tc.tkex.project / tc.cdb.instance / tc.redis.instance / tc.mongodb.instance / k8s.cluster / k8s.namespace / k8s.node / k8s.pod / k8s.ip / k8s.service / k8s.deployment / k8s.statefulset / k8s.statefulsetplus / k8s.daemonset / k8s.storageclass / k8s.persistentvolume / k8s.persistentvolumeclaim / k8s.secret。类型：String。必选：否</li><li>Name 按【实体名称】模糊匹配。类型：String。必选：否</li><li>ResourceId 按 【实体资源id】精确匹配。类型：String。必选：否</li></ul><p>注意：每次请求的 Filters 上限 10。</p>
 * @method string getNextCursor() 获取<p>查询偏移</p>
 * @method void setNextCursor(string $NextCursor) 设置<p>查询偏移</p>
 * @method integer getLimit() 获取<p>分页单页数量，默认 20，最大 100</p>
 * @method void setLimit(integer $Limit) 设置<p>分页单页数量，默认 20，最大 100</p>
 * @method integer getFromTime() 获取<p>查询开始时间</p><p>单位：毫秒</p>
 * @method void setFromTime(integer $FromTime) 设置<p>查询开始时间</p><p>单位：毫秒</p>
 * @method integer getToTime() 获取<p>查询结束时间</p><p>单位：毫秒</p>
 * @method void setToTime(integer $ToTime) 设置<p>查询结束时间</p><p>单位：毫秒</p>
 */
class DescribeResourceGraphEntitiesRequest extends AbstractModel
{
    /**
     * @var string <p>资源图谱id</p>
     */
    public $ResourceGraphId;

    /**
     * @var array <ul><li>Product 按【产品分组】精确匹配，可用参数：all / business_service / tke / cdb / redis / mongodb 。类型：String。必选：否</li><li>EntityClassName 按【实体类型】精确匹配，可用参数：all / app.service.application / tc.tke.cluster / tc.tkex.project / tc.cdb.instance / tc.redis.instance / tc.mongodb.instance / k8s.cluster / k8s.namespace / k8s.node / k8s.pod / k8s.ip / k8s.service / k8s.deployment / k8s.statefulset / k8s.statefulsetplus / k8s.daemonset / k8s.storageclass / k8s.persistentvolume / k8s.persistentvolumeclaim / k8s.secret。类型：String。必选：否</li><li>Name 按【实体名称】模糊匹配。类型：String。必选：否</li><li>ResourceId 按 【实体资源id】精确匹配。类型：String。必选：否</li></ul><p>注意：每次请求的 Filters 上限 10。</p>
     */
    public $Filters;

    /**
     * @var string <p>查询偏移</p>
     */
    public $NextCursor;

    /**
     * @var integer <p>分页单页数量，默认 20，最大 100</p>
     */
    public $Limit;

    /**
     * @var integer <p>查询开始时间</p><p>单位：毫秒</p>
     */
    public $FromTime;

    /**
     * @var integer <p>查询结束时间</p><p>单位：毫秒</p>
     */
    public $ToTime;

    /**
     * @param string $ResourceGraphId <p>资源图谱id</p>
     * @param array $Filters <ul><li>Product 按【产品分组】精确匹配，可用参数：all / business_service / tke / cdb / redis / mongodb 。类型：String。必选：否</li><li>EntityClassName 按【实体类型】精确匹配，可用参数：all / app.service.application / tc.tke.cluster / tc.tkex.project / tc.cdb.instance / tc.redis.instance / tc.mongodb.instance / k8s.cluster / k8s.namespace / k8s.node / k8s.pod / k8s.ip / k8s.service / k8s.deployment / k8s.statefulset / k8s.statefulsetplus / k8s.daemonset / k8s.storageclass / k8s.persistentvolume / k8s.persistentvolumeclaim / k8s.secret。类型：String。必选：否</li><li>Name 按【实体名称】模糊匹配。类型：String。必选：否</li><li>ResourceId 按 【实体资源id】精确匹配。类型：String。必选：否</li></ul><p>注意：每次请求的 Filters 上限 10。</p>
     * @param string $NextCursor <p>查询偏移</p>
     * @param integer $Limit <p>分页单页数量，默认 20，最大 100</p>
     * @param integer $FromTime <p>查询开始时间</p><p>单位：毫秒</p>
     * @param integer $ToTime <p>查询结束时间</p><p>单位：毫秒</p>
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("NextCursor",$param) and $param["NextCursor"] !== null) {
            $this->NextCursor = $param["NextCursor"];
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
