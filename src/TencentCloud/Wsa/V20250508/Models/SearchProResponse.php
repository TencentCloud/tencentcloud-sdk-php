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
namespace TencentCloud\Wsa\V20250508\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SearchPro返回参数结构体
 *
 * @method string getQuery() 获取<p>原始查询语</p>
 * @method void setQuery(string $Query) 设置<p>原始查询语</p>
 * @method array getPages() 获取<p>搜索结果页面详情，格式为json字符串。<br>title：结果标题<br>date：内容发布时间<br>url：内容发布源url<br>passage：标准摘要<br>content：动态摘要 （尊享版字段）<br>site：网站名称，部分不知名站点结果可能为空<br>score：相关性得分，取值0～1，越靠近1表示越相关<br>images：图片列表<br>favicon：网站图标链接，部分不知名站点结果可能为空</p>
 * @method void setPages(array $Pages) 设置<p>搜索结果页面详情，格式为json字符串。<br>title：结果标题<br>date：内容发布时间<br>url：内容发布源url<br>passage：标准摘要<br>content：动态摘要 （尊享版字段）<br>site：网站名称，部分不知名站点结果可能为空<br>score：相关性得分，取值0～1，越靠近1表示越相关<br>images：图片列表<br>favicon：网站图标链接，部分不知名站点结果可能为空</p>
 * @method string getVersion() 获取<p>用户版本：standard/premium/lite/flagship</p>
 * @method void setVersion(string $Version) 设置<p>用户版本：standard/premium/lite/flagship</p>
 * @method string getMsg() 获取<p>提示信息</p>
 * @method void setMsg(string $Msg) 设置<p>提示信息</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SearchProResponse extends AbstractModel
{
    /**
     * @var string <p>原始查询语</p>
     */
    public $Query;

    /**
     * @var array <p>搜索结果页面详情，格式为json字符串。<br>title：结果标题<br>date：内容发布时间<br>url：内容发布源url<br>passage：标准摘要<br>content：动态摘要 （尊享版字段）<br>site：网站名称，部分不知名站点结果可能为空<br>score：相关性得分，取值0～1，越靠近1表示越相关<br>images：图片列表<br>favicon：网站图标链接，部分不知名站点结果可能为空</p>
     */
    public $Pages;

    /**
     * @var string <p>用户版本：standard/premium/lite/flagship</p>
     */
    public $Version;

    /**
     * @var string <p>提示信息</p>
     */
    public $Msg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Query <p>原始查询语</p>
     * @param array $Pages <p>搜索结果页面详情，格式为json字符串。<br>title：结果标题<br>date：内容发布时间<br>url：内容发布源url<br>passage：标准摘要<br>content：动态摘要 （尊享版字段）<br>site：网站名称，部分不知名站点结果可能为空<br>score：相关性得分，取值0～1，越靠近1表示越相关<br>images：图片列表<br>favicon：网站图标链接，部分不知名站点结果可能为空</p>
     * @param string $Version <p>用户版本：standard/premium/lite/flagship</p>
     * @param string $Msg <p>提示信息</p>
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
        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Pages",$param) and $param["Pages"] !== null) {
            $this->Pages = $param["Pages"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Msg",$param) and $param["Msg"] !== null) {
            $this->Msg = $param["Msg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
