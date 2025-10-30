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
 * CreateLogset请求参数结构体
 *
 * @method string getLogsetName() 获取日志集名字。

- 最大支持255个字符。不支持`|`字符。
 * @method void setLogsetName(string $LogsetName) 设置日志集名字。

- 最大支持255个字符。不支持`|`字符。
 * @method array getTags() 获取标签描述列表。最大支持10个标签键值对，并且不能有重复的键值对
 * @method void setTags(array $Tags) 设置标签描述列表。最大支持10个标签键值对，并且不能有重复的键值对
 * @method string getLogsetId() 获取日志集ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。

- 用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符。
- 尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。
- 如果指定该字段，需保证全地域唯一
 * @method void setLogsetId(string $LogsetId) 设置日志集ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。

- 用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符。
- 尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。
- 如果指定该字段，需保证全地域唯一
 */
class CreateLogsetRequest extends AbstractModel
{
    /**
     * @var string 日志集名字。

- 最大支持255个字符。不支持`|`字符。
     */
    public $LogsetName;

    /**
     * @var array 标签描述列表。最大支持10个标签键值对，并且不能有重复的键值对
     */
    public $Tags;

    /**
     * @var string 日志集ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。

- 用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符。
- 尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。
- 如果指定该字段，需保证全地域唯一
     */
    public $LogsetId;

    /**
     * @param string $LogsetName 日志集名字。

- 最大支持255个字符。不支持`|`字符。
     * @param array $Tags 标签描述列表。最大支持10个标签键值对，并且不能有重复的键值对
     * @param string $LogsetId 日志集ID，格式为：用户自定义部分-用户APPID。未填写该参数时将自动生成ID。

- 用户自定义部分仅支持小写字母、数字和-，且不能以-开头和结尾，长度为3至40字符。
- 尾部需要使用-拼接用户APPID，APPID可在https://console.cloud.tencent.com/developer页面查询。
- 如果指定该字段，需保证全地域唯一
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
        if (array_key_exists("LogsetName",$param) and $param["LogsetName"] !== null) {
            $this->LogsetName = $param["LogsetName"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }
    }
}
