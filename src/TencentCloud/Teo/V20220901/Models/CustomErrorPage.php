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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义错误码页面结构体。
 *
 * @method string getPageId() 获取自定义错误页面 ID。
 * @method void setPageId(string $PageId) 设置自定义错误页面 ID。
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getName() 获取自定义错误页面名称。
 * @method void setName(string $Name) 设置自定义错误页面名称。
 * @method string getContentType() 获取自定义错误页面类型。
 * @method void setContentType(string $ContentType) 设置自定义错误页面类型。
 * @method string getDescription() 获取自定义错误页面描述。
 * @method void setDescription(string $Description) 设置自定义错误页面描述。
 * @method string getContent() 获取自定义错误页面内容。
 * @method void setContent(string $Content) 设置自定义错误页面内容。
 * @method array getReferences() 获取自定义错误页面引用。
 * @method void setReferences(array $References) 设置自定义错误页面引用。
 */
class CustomErrorPage extends AbstractModel
{
    /**
     * @var string 自定义错误页面 ID。
     */
    public $PageId;

    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 自定义错误页面名称。
     */
    public $Name;

    /**
     * @var string 自定义错误页面类型。
     */
    public $ContentType;

    /**
     * @var string 自定义错误页面描述。
     */
    public $Description;

    /**
     * @var string 自定义错误页面内容。
     */
    public $Content;

    /**
     * @var array 自定义错误页面引用。
     */
    public $References;

    /**
     * @param string $PageId 自定义错误页面 ID。
     * @param string $ZoneId 站点 ID。
     * @param string $Name 自定义错误页面名称。
     * @param string $ContentType 自定义错误页面类型。
     * @param string $Description 自定义错误页面描述。
     * @param string $Content 自定义错误页面内容。
     * @param array $References 自定义错误页面引用。
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
        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ContentType",$param) and $param["ContentType"] !== null) {
            $this->ContentType = $param["ContentType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("References",$param) and $param["References"] !== null) {
            $this->References = [];
            foreach ($param["References"] as $key => $value){
                $obj = new ErrorPageReference();
                $obj->deserialize($value);
                array_push($this->References, $obj);
            }
        }
    }
}
