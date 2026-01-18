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
 * @method string getQuery() 获取原始查询语
 * @method void setQuery(string $Query) 设置原始查询语
 * @method array getPages() 获取搜索结果页面详情，格式为json字符串。
title：结果标题
date：内容发布时间
url：内容发布源url
passage：标准摘要
content：动态摘要 （尊享版字段）
site：网站名称，部分不知名站点结果可能为空
score：相关性得分，取值0～1，越靠近1表示越相关
images：图片列表
favicon：网站图标链接，部分不知名站点结果可能为空
 * @method void setPages(array $Pages) 设置搜索结果页面详情，格式为json字符串。
title：结果标题
date：内容发布时间
url：内容发布源url
passage：标准摘要
content：动态摘要 （尊享版字段）
site：网站名称，部分不知名站点结果可能为空
score：相关性得分，取值0～1，越靠近1表示越相关
images：图片列表
favicon：网站图标链接，部分不知名站点结果可能为空
 * @method string getVersion() 获取用户版本：standard/premium/lite
 * @method void setVersion(string $Version) 设置用户版本：standard/premium/lite
 * @method string getMsg() 获取提示信息
 * @method void setMsg(string $Msg) 设置提示信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class SearchProResponse extends AbstractModel
{
    /**
     * @var string 原始查询语
     */
    public $Query;

    /**
     * @var array 搜索结果页面详情，格式为json字符串。
title：结果标题
date：内容发布时间
url：内容发布源url
passage：标准摘要
content：动态摘要 （尊享版字段）
site：网站名称，部分不知名站点结果可能为空
score：相关性得分，取值0～1，越靠近1表示越相关
images：图片列表
favicon：网站图标链接，部分不知名站点结果可能为空
     */
    public $Pages;

    /**
     * @var string 用户版本：standard/premium/lite
     */
    public $Version;

    /**
     * @var string 提示信息
     */
    public $Msg;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Query 原始查询语
     * @param array $Pages 搜索结果页面详情，格式为json字符串。
title：结果标题
date：内容发布时间
url：内容发布源url
passage：标准摘要
content：动态摘要 （尊享版字段）
site：网站名称，部分不知名站点结果可能为空
score：相关性得分，取值0～1，越靠近1表示越相关
images：图片列表
favicon：网站图标链接，部分不知名站点结果可能为空
     * @param string $Version 用户版本：standard/premium/lite
     * @param string $Msg 提示信息
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
