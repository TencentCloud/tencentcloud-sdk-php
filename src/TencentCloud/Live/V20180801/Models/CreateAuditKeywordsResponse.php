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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAuditKeywords返回参数结构体
 *
 * @method array getKeywordIds() 获取添加成功的关键词 Id 列表。
 * @method void setKeywordIds(array $KeywordIds) 设置添加成功的关键词 Id 列表。
 * @method array getDupInfos() 获取重复关键词列表。
 * @method void setDupInfos(array $DupInfos) 设置重复关键词列表。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateAuditKeywordsResponse extends AbstractModel
{
    /**
     * @var array 添加成功的关键词 Id 列表。
     */
    public $KeywordIds;

    /**
     * @var array 重复关键词列表。
     */
    public $DupInfos;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $KeywordIds 添加成功的关键词 Id 列表。
     * @param array $DupInfos 重复关键词列表。
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
        if (array_key_exists("KeywordIds",$param) and $param["KeywordIds"] !== null) {
            $this->KeywordIds = $param["KeywordIds"];
        }

        if (array_key_exists("DupInfos",$param) and $param["DupInfos"] !== null) {
            $this->DupInfos = [];
            foreach ($param["DupInfos"] as $key => $value){
                $obj = new AuditKeywordInfo();
                $obj->deserialize($value);
                array_push($this->DupInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
