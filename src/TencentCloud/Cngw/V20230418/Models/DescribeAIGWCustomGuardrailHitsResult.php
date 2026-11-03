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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询自定义安全护栏命中记录结果
 *
 * @method integer getTotalCount() 获取<p>时间范围和过滤条件内匹配的审核日志总数，分页前统计；不再限定为最多 1000 条。日志异常条目可能无法解析为 Hits。</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>时间范围和过滤条件内匹配的审核日志总数，分页前统计；不再限定为最多 1000 条。日志异常条目可能无法解析为 Hits。</p>
 * @method array getHits() 获取<p>当前页审核记录，按时间倒序；同一业务请求的多次送审会产生多条记录，不能直接把条数当业务请求数。</p>
 * @method void setHits(array $Hits) 设置<p>当前页审核记录，按时间倒序；同一业务请求的多次送审会产生多条记录，不能直接把条数当业务请求数。</p>
 * @method boolean getTruncated() 获取<p>兼容字段，当前分页查询返回 false；用 Offset、Limit、TotalCount 翻页。1000 条限制只适用于导出接口。</p>
 * @method void setTruncated(boolean $Truncated) 设置<p>兼容字段，当前分页查询返回 false；用 Offset、Limit、TotalCount 翻页。1000 条限制只适用于导出接口。</p>
 */
class DescribeAIGWCustomGuardrailHitsResult extends AbstractModel
{
    /**
     * @var integer <p>时间范围和过滤条件内匹配的审核日志总数，分页前统计；不再限定为最多 1000 条。日志异常条目可能无法解析为 Hits。</p>
     */
    public $TotalCount;

    /**
     * @var array <p>当前页审核记录，按时间倒序；同一业务请求的多次送审会产生多条记录，不能直接把条数当业务请求数。</p>
     */
    public $Hits;

    /**
     * @var boolean <p>兼容字段，当前分页查询返回 false；用 Offset、Limit、TotalCount 翻页。1000 条限制只适用于导出接口。</p>
     */
    public $Truncated;

    /**
     * @param integer $TotalCount <p>时间范围和过滤条件内匹配的审核日志总数，分页前统计；不再限定为最多 1000 条。日志异常条目可能无法解析为 Hits。</p>
     * @param array $Hits <p>当前页审核记录，按时间倒序；同一业务请求的多次送审会产生多条记录，不能直接把条数当业务请求数。</p>
     * @param boolean $Truncated <p>兼容字段，当前分页查询返回 false；用 Offset、Limit、TotalCount 翻页。1000 条限制只适用于导出接口。</p>
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
        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Hits",$param) and $param["Hits"] !== null) {
            $this->Hits = [];
            foreach ($param["Hits"] as $key => $value){
                $obj = new CustomGuardrailHit();
                $obj->deserialize($value);
                array_push($this->Hits, $obj);
            }
        }

        if (array_key_exists("Truncated",$param) and $param["Truncated"] !== null) {
            $this->Truncated = $param["Truncated"];
        }
    }
}
