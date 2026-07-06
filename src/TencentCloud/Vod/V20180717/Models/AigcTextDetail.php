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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC生文明细
 *
 * @method integer getPageSize() 获取<p>每页条数</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页条数</p>
 * @method string getScrollToken() 获取<p>上一页响应中返回的 scroll_token,用于翻下一页</p>
 * @method void setScrollToken(string $ScrollToken) 设置<p>上一页响应中返回的 scroll_token,用于翻下一页</p>
 * @method array getData() 获取<p>生文详细数据</p>
 * @method void setData(array $Data) 设置<p>生文详细数据</p>
 */
class AigcTextDetail extends AbstractModel
{
    /**
     * @var integer <p>每页条数</p>
     */
    public $PageSize;

    /**
     * @var string <p>上一页响应中返回的 scroll_token,用于翻下一页</p>
     */
    public $ScrollToken;

    /**
     * @var array <p>生文详细数据</p>
     */
    public $Data;

    /**
     * @param integer $PageSize <p>每页条数</p>
     * @param string $ScrollToken <p>上一页响应中返回的 scroll_token,用于翻下一页</p>
     * @param array $Data <p>生文详细数据</p>
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ScrollToken",$param) and $param["ScrollToken"] !== null) {
            $this->ScrollToken = $param["ScrollToken"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new AigcTextDetailData();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
