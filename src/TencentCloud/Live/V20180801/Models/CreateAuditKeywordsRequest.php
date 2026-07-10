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
 * CreateAuditKeywords请求参数结构体
 *
 * @method array getKeywords() 获取<p>关键词列表。</p>
 * @method void setKeywords(array $Keywords) 设置<p>关键词列表。</p>
 * @method string getLibId() 获取<p>直播审核词库Id。</p>
 * @method void setLibId(string $LibId) 设置<p>直播审核词库Id。</p>
 */
class CreateAuditKeywordsRequest extends AbstractModel
{
    /**
     * @var array <p>关键词列表。</p>
     */
    public $Keywords;

    /**
     * @var string <p>直播审核词库Id。</p>
     */
    public $LibId;

    /**
     * @param array $Keywords <p>关键词列表。</p>
     * @param string $LibId <p>直播审核词库Id。</p>
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
        if (array_key_exists("Keywords",$param) and $param["Keywords"] !== null) {
            $this->Keywords = [];
            foreach ($param["Keywords"] as $key => $value){
                $obj = new AuditKeyword();
                $obj->deserialize($value);
                array_push($this->Keywords, $obj);
            }
        }

        if (array_key_exists("LibId",$param) and $param["LibId"] !== null) {
            $this->LibId = $param["LibId"];
        }
    }
}
