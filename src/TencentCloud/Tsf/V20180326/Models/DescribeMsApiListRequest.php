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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMsApiList请求参数结构体
 *
 * @method string getMicroserviceId() 获取<p>微服务ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/649/36084">DescribeMicroservices</a> 的返回值中的 MicroserviceId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tse/tsf-consul?tab=service">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/85860">CreateMicroserviceWithDetailResp</a>创建新的微服务。</p>
 * @method void setMicroserviceId(string $MicroserviceId) 设置<p>微服务ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/649/36084">DescribeMicroservices</a> 的返回值中的 MicroserviceId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tse/tsf-consul?tab=service">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/85860">CreateMicroserviceWithDetailResp</a>创建新的微服务。</p>
 * @method string getSearchWord() 获取<p>搜索关键字。</p>
 * @method void setSearchWord(string $SearchWord) 设置<p>搜索关键字。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为50。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为50。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method array getBatchApiParamList() 获取<p>批量查询API参数</p>
 * @method void setBatchApiParamList(array $BatchApiParamList) 设置<p>批量查询API参数</p>
 */
class DescribeMsApiListRequest extends AbstractModel
{
    /**
     * @var string <p>微服务ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/649/36084">DescribeMicroservices</a> 的返回值中的 MicroserviceId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tse/tsf-consul?tab=service">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/85860">CreateMicroserviceWithDetailResp</a>创建新的微服务。</p>
     */
    public $MicroserviceId;

    /**
     * @var string <p>搜索关键字。</p>
     */
    public $SearchWord;

    /**
     * @var integer <p>返回数量，默认为20，最大值为50。</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var array <p>批量查询API参数</p>
     */
    public $BatchApiParamList;

    /**
     * @param string $MicroserviceId <p>微服务ID。该参数可以通过调用 <a href="https://cloud.tencent.com/document/product/649/36084">DescribeMicroservices</a> 的返回值中的 MicroserviceId 字段来获取或通过登录<a href="https://console.cloud.tencent.com/tse/tsf-consul?tab=service">控制台</a>查看；也可以调用<a href="https://cloud.tencent.com/document/product/649/85860">CreateMicroserviceWithDetailResp</a>创建新的微服务。</p>
     * @param string $SearchWord <p>搜索关键字。</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为50。</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param array $BatchApiParamList <p>批量查询API参数</p>
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
        if (array_key_exists("MicroserviceId",$param) and $param["MicroserviceId"] !== null) {
            $this->MicroserviceId = $param["MicroserviceId"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("BatchApiParamList",$param) and $param["BatchApiParamList"] !== null) {
            $this->BatchApiParamList = [];
            foreach ($param["BatchApiParamList"] as $key => $value){
                $obj = new ApiParam();
                $obj->deserialize($value);
                array_push($this->BatchApiParamList, $obj);
            }
        }
    }
}
