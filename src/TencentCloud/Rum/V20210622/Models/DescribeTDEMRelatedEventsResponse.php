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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTDEMRelatedEvents返回参数结构体
 *
 * @method array getEvents() 获取<p>关联事件，schema 与 Search 列表项相同</p>
 * @method void setEvents(array $Events) 设置<p>关联事件，schema 与 Search 列表项相同</p>
 * @method integer getOffset() 获取<p>偏移</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移</p>
 * @method integer getLimit() 获取<p>条数</p>
 * @method void setLimit(integer $Limit) 设置<p>条数</p>
 * @method boolean getHasMore() 获取<p>是否还有下一页</p>
 * @method void setHasMore(boolean $HasMore) 设置<p>是否还有下一页</p>
 * @method array getCategoryCounts() 获取<p>各分类计数，Key 为分类 id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCategoryCounts(array $CategoryCounts) 设置<p>各分类计数，Key 为分类 id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTDEMRelatedEventsResponse extends AbstractModel
{
    /**
     * @var array <p>关联事件，schema 与 Search 列表项相同</p>
     */
    public $Events;

    /**
     * @var integer <p>偏移</p>
     */
    public $Offset;

    /**
     * @var integer <p>条数</p>
     */
    public $Limit;

    /**
     * @var boolean <p>是否还有下一页</p>
     */
    public $HasMore;

    /**
     * @var array <p>各分类计数，Key 为分类 id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CategoryCounts;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Events <p>关联事件，schema 与 Search 列表项相同</p>
     * @param integer $Offset <p>偏移</p>
     * @param integer $Limit <p>条数</p>
     * @param boolean $HasMore <p>是否还有下一页</p>
     * @param array $CategoryCounts <p>各分类计数，Key 为分类 id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = [];
            foreach ($param["Events"] as $key => $value){
                $obj = new ExplorationEventItem();
                $obj->deserialize($value);
                array_push($this->Events, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("HasMore",$param) and $param["HasMore"] !== null) {
            $this->HasMore = $param["HasMore"];
        }

        if (array_key_exists("CategoryCounts",$param) and $param["CategoryCounts"] !== null) {
            $this->CategoryCounts = [];
            foreach ($param["CategoryCounts"] as $key => $value){
                $obj = new IntKeyValue();
                $obj->deserialize($value);
                array_push($this->CategoryCounts, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
