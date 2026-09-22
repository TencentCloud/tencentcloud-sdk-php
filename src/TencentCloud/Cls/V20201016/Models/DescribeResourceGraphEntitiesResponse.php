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
 * DescribeResourceGraphEntities返回参数结构体
 *
 * @method array getEntityInfos() 获取<p>实体列表</p>
 * @method void setEntityInfos(array $EntityInfos) 设置<p>实体列表</p>
 * @method integer getHasMore() 获取<p>是否还有下一页</p><p>枚举值：</p><ul><li>0： 没有下一页</li><li>1： 还有下一页</li></ul>
 * @method void setHasMore(integer $HasMore) 设置<p>是否还有下一页</p><p>枚举值：</p><ul><li>0： 没有下一页</li><li>1： 还有下一页</li></ul>
 * @method string getNextCursor() 获取<p>分页的游标，有值则下次分页请求原样带上，无值则表示无下一页</p>
 * @method void setNextCursor(string $NextCursor) 设置<p>分页的游标，有值则下次分页请求原样带上，无值则表示无下一页</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeResourceGraphEntitiesResponse extends AbstractModel
{
    /**
     * @var array <p>实体列表</p>
     */
    public $EntityInfos;

    /**
     * @var integer <p>是否还有下一页</p><p>枚举值：</p><ul><li>0： 没有下一页</li><li>1： 还有下一页</li></ul>
     */
    public $HasMore;

    /**
     * @var string <p>分页的游标，有值则下次分页请求原样带上，无值则表示无下一页</p>
     */
    public $NextCursor;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $EntityInfos <p>实体列表</p>
     * @param integer $HasMore <p>是否还有下一页</p><p>枚举值：</p><ul><li>0： 没有下一页</li><li>1： 还有下一页</li></ul>
     * @param string $NextCursor <p>分页的游标，有值则下次分页请求原样带上，无值则表示无下一页</p>
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
        if (array_key_exists("EntityInfos",$param) and $param["EntityInfos"] !== null) {
            $this->EntityInfos = [];
            foreach ($param["EntityInfos"] as $key => $value){
                $obj = new EntityInfo();
                $obj->deserialize($value);
                array_push($this->EntityInfos, $obj);
            }
        }

        if (array_key_exists("HasMore",$param) and $param["HasMore"] !== null) {
            $this->HasMore = $param["HasMore"];
        }

        if (array_key_exists("NextCursor",$param) and $param["NextCursor"] !== null) {
            $this->NextCursor = $param["NextCursor"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
