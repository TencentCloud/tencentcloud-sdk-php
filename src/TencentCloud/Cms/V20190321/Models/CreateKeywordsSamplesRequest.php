<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateKeywordsSamples请求参数结构体
 *
 * @method array getUserKeywords() 获取关键词库信息：单次限制写入2000个，词库总容量不可超过10000个。
 * @method void setUserKeywords(array $UserKeywords) 设置关键词库信息：单次限制写入2000个，词库总容量不可超过10000个。
 * @method string getLibID() 获取词库ID
 * @method void setLibID(string $LibID) 设置词库ID
 */
class CreateKeywordsSamplesRequest extends AbstractModel
{
    /**
     * @var array 关键词库信息：单次限制写入2000个，词库总容量不可超过10000个。
     */
    public $UserKeywords;

    /**
     * @var string 词库ID
     */
    public $LibID;

    /**
     * @param array $UserKeywords 关键词库信息：单次限制写入2000个，词库总容量不可超过10000个。
     * @param string $LibID 词库ID
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
        if (array_key_exists("UserKeywords",$param) and $param["UserKeywords"] !== null) {
            $this->UserKeywords = [];
            foreach ($param["UserKeywords"] as $key => $value){
                $obj = new UserKeyword();
                $obj->deserialize($value);
                array_push($this->UserKeywords, $obj);
            }
        }

        if (array_key_exists("LibID",$param) and $param["LibID"] !== null) {
            $this->LibID = $param["LibID"];
        }
    }
}
