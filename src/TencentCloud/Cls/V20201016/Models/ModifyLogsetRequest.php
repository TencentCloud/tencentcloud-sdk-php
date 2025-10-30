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
 * ModifyLogset请求参数结构体
 *
 * @method string getLogsetId() 获取日志集Id。通过 [获取日志集列表](https://cloud.tencent.com/document/product/614/58624)获取日志集Id。
 * @method void setLogsetId(string $LogsetId) 设置日志集Id。通过 [获取日志集列表](https://cloud.tencent.com/document/product/614/58624)获取日志集Id。
 * @method string getLogsetName() 获取日志集名字。- 最大支持255个字符。不支持`|`字符。
 * @method void setLogsetName(string $LogsetName) 设置日志集名字。- 最大支持255个字符。不支持`|`字符。
 * @method array getTags() 获取日志集的绑定的标签键值对。最大支持10个标签键值对，同一个资源只能同时绑定一个标签键。
 * @method void setTags(array $Tags) 设置日志集的绑定的标签键值对。最大支持10个标签键值对，同一个资源只能同时绑定一个标签键。
 */
class ModifyLogsetRequest extends AbstractModel
{
    /**
     * @var string 日志集Id。通过 [获取日志集列表](https://cloud.tencent.com/document/product/614/58624)获取日志集Id。
     */
    public $LogsetId;

    /**
     * @var string 日志集名字。- 最大支持255个字符。不支持`|`字符。
     */
    public $LogsetName;

    /**
     * @var array 日志集的绑定的标签键值对。最大支持10个标签键值对，同一个资源只能同时绑定一个标签键。
     */
    public $Tags;

    /**
     * @param string $LogsetId 日志集Id。通过 [获取日志集列表](https://cloud.tencent.com/document/product/614/58624)获取日志集Id。
     * @param string $LogsetName 日志集名字。- 最大支持255个字符。不支持`|`字符。
     * @param array $Tags 日志集的绑定的标签键值对。最大支持10个标签键值对，同一个资源只能同时绑定一个标签键。
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
        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
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
    }
}
