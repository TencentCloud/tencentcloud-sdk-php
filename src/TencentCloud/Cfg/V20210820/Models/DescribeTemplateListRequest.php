<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTemplateList请求参数结构体
 *
 * @method integer getLimit() 获取分页Limit, 最大值100
 * @method void setLimit(integer $Limit) 设置分页Limit, 最大值100
 * @method integer getOffset() 获取分页Offset
 * @method void setOffset(integer $Offset) 设置分页Offset
 * @method string getTitle() 获取演练名称
 * @method void setTitle(string $Title) 设置演练名称
 * @method array getTag() 获取标签键
 * @method void setTag(array $Tag) 设置标签键
 * @method integer getIsUsed() 获取状态，1---使用中， 2---停用
 * @method void setIsUsed(integer $IsUsed) 设置状态，1---使用中， 2---停用
 * @method array getTags() 获取标签对
 * @method void setTags(array $Tags) 设置标签对
 */
class DescribeTemplateListRequest extends AbstractModel
{
    /**
     * @var integer 分页Limit, 最大值100
     */
    public $Limit;

    /**
     * @var integer 分页Offset
     */
    public $Offset;

    /**
     * @var string 演练名称
     */
    public $Title;

    /**
     * @var array 标签键
     */
    public $Tag;

    /**
     * @var integer 状态，1---使用中， 2---停用
     */
    public $IsUsed;

    /**
     * @var array 标签对
     */
    public $Tags;

    /**
     * @param integer $Limit 分页Limit, 最大值100
     * @param integer $Offset 分页Offset
     * @param string $Title 演练名称
     * @param array $Tag 标签键
     * @param integer $IsUsed 状态，1---使用中， 2---停用
     * @param array $Tags 标签对
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }

        if (array_key_exists("IsUsed",$param) and $param["IsUsed"] !== null) {
            $this->IsUsed = $param["IsUsed"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagWithDescribe();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
