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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDocuments请求参数结构体
 *
 * @method integer getSchoolId() 获取学校id
 * @method void setSchoolId(integer $SchoolId) 设置学校id
 * @method integer getPage() 获取分页查询当前页数，从1开始递增
 * @method void setPage(integer $Page) 设置分页查询当前页数，从1开始递增
 * @method integer getLimit() 获取每页数据量，最大1000
 * @method void setLimit(integer $Limit) 设置每页数据量，最大1000
 * @method array getPermission() 获取课件权限。[0]：获取owner的私有课件；[1]：获取owner的公开课件; [0,1]：则获取owner的私有课件和公开课件；[2]：获取owner的私有课件和所有人(包括owner)的公开课件
 * @method void setPermission(array $Permission) 设置课件权限。[0]：获取owner的私有课件；[1]：获取owner的公开课件; [0,1]：则获取owner的私有课件和公开课件；[2]：获取owner的私有课件和所有人(包括owner)的公开课件
 * @method string getOwner() 获取课件所有者的user_id，不填默认获取school_id下所有课件
 * @method void setOwner(string $Owner) 设置课件所有者的user_id，不填默认获取school_id下所有课件
 * @method string getKeyword() 获取课件名称搜索词
 * @method void setKeyword(string $Keyword) 设置课件名称搜索词
 * @method array getDocumentId() 获取课件id列表，从列表中查询，忽略错误的id
 * @method void setDocumentId(array $DocumentId) 设置课件id列表，从列表中查询，忽略错误的id
 */
class DescribeDocumentsRequest extends AbstractModel
{
    /**
     * @var integer 学校id
     */
    public $SchoolId;

    /**
     * @var integer 分页查询当前页数，从1开始递增
     */
    public $Page;

    /**
     * @var integer 每页数据量，最大1000
     */
    public $Limit;

    /**
     * @var array 课件权限。[0]：获取owner的私有课件；[1]：获取owner的公开课件; [0,1]：则获取owner的私有课件和公开课件；[2]：获取owner的私有课件和所有人(包括owner)的公开课件
     */
    public $Permission;

    /**
     * @var string 课件所有者的user_id，不填默认获取school_id下所有课件
     */
    public $Owner;

    /**
     * @var string 课件名称搜索词
     */
    public $Keyword;

    /**
     * @var array 课件id列表，从列表中查询，忽略错误的id
     */
    public $DocumentId;

    /**
     * @param integer $SchoolId 学校id
     * @param integer $Page 分页查询当前页数，从1开始递增
     * @param integer $Limit 每页数据量，最大1000
     * @param array $Permission 课件权限。[0]：获取owner的私有课件；[1]：获取owner的公开课件; [0,1]：则获取owner的私有课件和公开课件；[2]：获取owner的私有课件和所有人(包括owner)的公开课件
     * @param string $Owner 课件所有者的user_id，不填默认获取school_id下所有课件
     * @param string $Keyword 课件名称搜索词
     * @param array $DocumentId 课件id列表，从列表中查询，忽略错误的id
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
        if (array_key_exists("SchoolId",$param) and $param["SchoolId"] !== null) {
            $this->SchoolId = $param["SchoolId"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("DocumentId",$param) and $param["DocumentId"] !== null) {
            $this->DocumentId = $param["DocumentId"];
        }
    }
}
