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
namespace TencentCloud\Wav\V20210129\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryClueInfoList返回参数结构体
 *
 * @method array getPageData() 获取线索信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageData(array $PageData) 设置线索信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNextCursor() 获取分页游标，下次调用带上该值，则从当前的位置继续往后拉，以实现增量拉取。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNextCursor(string $NextCursor) 设置分页游标，下次调用带上该值，则从当前的位置继续往后拉，以实现增量拉取。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHasMore() 获取是否还有更多数据。0-否；1-是。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasMore(integer $HasMore) 设置是否还有更多数据。0-否；1-是。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class QueryClueInfoListResponse extends AbstractModel
{
    /**
     * @var array 线索信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageData;

    /**
     * @var string 分页游标，下次调用带上该值，则从当前的位置继续往后拉，以实现增量拉取。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NextCursor;

    /**
     * @var integer 是否还有更多数据。0-否；1-是。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasMore;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $PageData 线索信息列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NextCursor 分页游标，下次调用带上该值，则从当前的位置继续往后拉，以实现增量拉取。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HasMore 是否还有更多数据。0-否；1-是。
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
        if (array_key_exists("PageData",$param) and $param["PageData"] !== null) {
            $this->PageData = [];
            foreach ($param["PageData"] as $key => $value){
                $obj = new ClueInfoDetail();
                $obj->deserialize($value);
                array_push($this->PageData, $obj);
            }
        }

        if (array_key_exists("NextCursor",$param) and $param["NextCursor"] !== null) {
            $this->NextCursor = $param["NextCursor"];
        }

        if (array_key_exists("HasMore",$param) and $param["HasMore"] !== null) {
            $this->HasMore = $param["HasMore"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
