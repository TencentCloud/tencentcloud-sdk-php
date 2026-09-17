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
 * DescribePersonSamples请求参数结构体
 *
 * @method integer getSubAppId() 获取<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method void setSubAppId(integer $SubAppId) 设置<p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
 * @method string getType() 获取<p>拉取的素材类型，可选值：</p><li>UserDefine：用户自定义素材库；</li><li>Default：系统默认素材库。</li><p>默认值：UserDefine，拉取用户自定义素材库素材。<br>说明：如果是拉取系统默认素材库，只能使用素材名字或者素材 ID + 素材名字的方式进行拉取，且五官图片只返回一张。</p>
 * @method void setType(string $Type) 设置<p>拉取的素材类型，可选值：</p><li>UserDefine：用户自定义素材库；</li><li>Default：系统默认素材库。</li><p>默认值：UserDefine，拉取用户自定义素材库素材。<br>说明：如果是拉取系统默认素材库，只能使用素材名字或者素材 ID + 素材名字的方式进行拉取，且五官图片只返回一张。</p>
 * @method array getPersonIds() 获取<p>素材 ID，数组长度限制：100。</p>
 * @method void setPersonIds(array $PersonIds) 设置<p>素材 ID，数组长度限制：100。</p>
 * @method array getNames() 获取<p>素材名称，数组长度限制：20。</p>
 * @method void setNames(array $Names) 设置<p>素材名称，数组长度限制：20。</p>
 * @method array getTags() 获取<p>素材标签，数组长度限制：20。</p>
 * @method void setTags(array $Tags) 设置<p>素材标签，数组长度限制：20。</p>
 * @method integer getOffset() 获取<p>分页偏移量，默认值：0。</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，默认值：0。</p>
 * @method integer getLimit() 获取<p>返回记录条数，默认值：100，最大值：100。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回记录条数，默认值：100，最大值：100。</p>
 */
class DescribePersonSamplesRequest extends AbstractModel
{
    /**
     * @var integer <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     */
    public $SubAppId;

    /**
     * @var string <p>拉取的素材类型，可选值：</p><li>UserDefine：用户自定义素材库；</li><li>Default：系统默认素材库。</li><p>默认值：UserDefine，拉取用户自定义素材库素材。<br>说明：如果是拉取系统默认素材库，只能使用素材名字或者素材 ID + 素材名字的方式进行拉取，且五官图片只返回一张。</p>
     */
    public $Type;

    /**
     * @var array <p>素材 ID，数组长度限制：100。</p>
     */
    public $PersonIds;

    /**
     * @var array <p>素材名称，数组长度限制：20。</p>
     */
    public $Names;

    /**
     * @var array <p>素材标签，数组长度限制：20。</p>
     */
    public $Tags;

    /**
     * @var integer <p>分页偏移量，默认值：0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回记录条数，默认值：100，最大值：100。</p>
     */
    public $Limit;

    /**
     * @param integer $SubAppId <p><b>点播<a href="/document/product/266/14574">应用</a> ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b></p>
     * @param string $Type <p>拉取的素材类型，可选值：</p><li>UserDefine：用户自定义素材库；</li><li>Default：系统默认素材库。</li><p>默认值：UserDefine，拉取用户自定义素材库素材。<br>说明：如果是拉取系统默认素材库，只能使用素材名字或者素材 ID + 素材名字的方式进行拉取，且五官图片只返回一张。</p>
     * @param array $PersonIds <p>素材 ID，数组长度限制：100。</p>
     * @param array $Names <p>素材名称，数组长度限制：20。</p>
     * @param array $Tags <p>素材标签，数组长度限制：20。</p>
     * @param integer $Offset <p>分页偏移量，默认值：0。</p>
     * @param integer $Limit <p>返回记录条数，默认值：100，最大值：100。</p>
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PersonIds",$param) and $param["PersonIds"] !== null) {
            $this->PersonIds = $param["PersonIds"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
