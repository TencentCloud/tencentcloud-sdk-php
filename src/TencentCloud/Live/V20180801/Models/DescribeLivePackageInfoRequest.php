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
 * DescribeLivePackageInfo请求参数结构体
 *
 * @method integer getPackageType() 获取<p>包类型，可选值：<br>0：流量包<br>1：转码包<br>2: 连麦包。</p>
 * @method void setPackageType(integer $PackageType) 设置<p>包类型，可选值：<br>0：流量包<br>1：转码包<br>2: 连麦包。</p>
 * @method string getOrderBy() 获取<p>排序规则:</p><ol><li>BuyTimeDesc： 最新购买的排在最前面</li><li>BuyTimeAsc： 最老购买的排在最前面</li><li>ExpireTimeDesc： 最后过期的排在最前面</li><li>ExpireTimeAsc：最先过期的排在最前面。</li></ol><p>注意：</p><ol><li>PackageType 为 2（连麦包） 的时候，不支持 3、4 排序。</li></ol>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序规则:</p><ol><li>BuyTimeDesc： 最新购买的排在最前面</li><li>BuyTimeAsc： 最老购买的排在最前面</li><li>ExpireTimeDesc： 最后过期的排在最前面</li><li>ExpireTimeAsc：最先过期的排在最前面。</li></ol><p>注意：</p><ol><li>PackageType 为 2（连麦包） 的时候，不支持 3、4 排序。</li></ol>
 * @method integer getPageNum() 获取<p>取得第几页的数据，和 PageSize 同时传递才会生效。</p>
 * @method void setPageNum(integer $PageNum) 设置<p>取得第几页的数据，和 PageSize 同时传递才会生效。</p>
 * @method integer getPageSize() 获取<p>分页大小，和 PageNum 同时传递才会生效。<br>取值：10 ～ 100 之间的任意整数。</p>
 * @method void setPageSize(integer $PageSize) 设置<p>分页大小，和 PageNum 同时传递才会生效。<br>取值：10 ～ 100 之间的任意整数。</p>
 */
class DescribeLivePackageInfoRequest extends AbstractModel
{
    /**
     * @var integer <p>包类型，可选值：<br>0：流量包<br>1：转码包<br>2: 连麦包。</p>
     */
    public $PackageType;

    /**
     * @var string <p>排序规则:</p><ol><li>BuyTimeDesc： 最新购买的排在最前面</li><li>BuyTimeAsc： 最老购买的排在最前面</li><li>ExpireTimeDesc： 最后过期的排在最前面</li><li>ExpireTimeAsc：最先过期的排在最前面。</li></ol><p>注意：</p><ol><li>PackageType 为 2（连麦包） 的时候，不支持 3、4 排序。</li></ol>
     */
    public $OrderBy;

    /**
     * @var integer <p>取得第几页的数据，和 PageSize 同时传递才会生效。</p>
     */
    public $PageNum;

    /**
     * @var integer <p>分页大小，和 PageNum 同时传递才会生效。<br>取值：10 ～ 100 之间的任意整数。</p>
     */
    public $PageSize;

    /**
     * @param integer $PackageType <p>包类型，可选值：<br>0：流量包<br>1：转码包<br>2: 连麦包。</p>
     * @param string $OrderBy <p>排序规则:</p><ol><li>BuyTimeDesc： 最新购买的排在最前面</li><li>BuyTimeAsc： 最老购买的排在最前面</li><li>ExpireTimeDesc： 最后过期的排在最前面</li><li>ExpireTimeAsc：最先过期的排在最前面。</li></ol><p>注意：</p><ol><li>PackageType 为 2（连麦包） 的时候，不支持 3、4 排序。</li></ol>
     * @param integer $PageNum <p>取得第几页的数据，和 PageSize 同时传递才会生效。</p>
     * @param integer $PageSize <p>分页大小，和 PageNum 同时传递才会生效。<br>取值：10 ～ 100 之间的任意整数。</p>
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
        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
