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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询事件详情（营销保护）
 *
 * @method string getSearchScene() 获取<p>查询场景。例如：查询航班、查询库存等。</p>
 * @method void setSearchScene(string $SearchScene) 设置<p>查询场景。例如：查询航班、查询库存等。</p>
 * @method string getSearchParam() 获取<p>查询参数。查询时输入的参数。</p>
 * @method void setSearchParam(string $SearchParam) 设置<p>查询参数。查询时输入的参数。</p>
 * @method string getReferPageUrl() 获取<p>上一个网页URL</p>
 * @method void setReferPageUrl(string $ReferPageUrl) 设置<p>上一个网页URL</p>
 * @method string getGuestId() 获取<p>游客账号ID</p>
 * @method void setGuestId(string $GuestId) 设置<p>游客账号ID</p>
 * @method array getCust() 获取<p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。<br>示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 * @method void setCust(array $Cust) 设置<p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。<br>示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
 */
class SearchEvent extends AbstractModel
{
    /**
     * @var string <p>查询场景。例如：查询航班、查询库存等。</p>
     */
    public $SearchScene;

    /**
     * @var string <p>查询参数。查询时输入的参数。</p>
     */
    public $SearchParam;

    /**
     * @var string <p>上一个网页URL</p>
     */
    public $ReferPageUrl;

    /**
     * @var string <p>游客账号ID</p>
     */
    public $GuestId;

    /**
     * @var array <p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。<br>示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
     */
    public $Cust;

    /**
     * @param string $SearchScene <p>查询场景。例如：查询航班、查询库存等。</p>
     * @param string $SearchParam <p>查询参数。查询时输入的参数。</p>
     * @param string $ReferPageUrl <p>上一个网页URL</p>
     * @param string $GuestId <p>游客账号ID</p>
     * @param array $Cust <p>与RCE-PRO约定的定制化信息。为K:V 格式的对象数组。<br>示例：[{&quot;Key&quot;: &quot;ApproverName&quot;, &quot;Value&quot;: &quot;bob&quot;},{&quot;Key&quot;:&quot;ApproverPhone&quot;,&quot;Value&quot;: &quot;+86131****5678&quot;}]</p>
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
        if (array_key_exists("SearchScene",$param) and $param["SearchScene"] !== null) {
            $this->SearchScene = $param["SearchScene"];
        }

        if (array_key_exists("SearchParam",$param) and $param["SearchParam"] !== null) {
            $this->SearchParam = $param["SearchParam"];
        }

        if (array_key_exists("ReferPageUrl",$param) and $param["ReferPageUrl"] !== null) {
            $this->ReferPageUrl = $param["ReferPageUrl"];
        }

        if (array_key_exists("GuestId",$param) and $param["GuestId"] !== null) {
            $this->GuestId = $param["GuestId"];
        }

        if (array_key_exists("Cust",$param) and $param["Cust"] !== null) {
            $this->Cust = [];
            foreach ($param["Cust"] as $key => $value){
                $obj = new Cust();
                $obj->deserialize($value);
                array_push($this->Cust, $obj);
            }
        }
    }
}
