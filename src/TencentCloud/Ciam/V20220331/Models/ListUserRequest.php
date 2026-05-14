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
namespace TencentCloud\Ciam\V20220331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListUser请求参数结构体
 *
 * @method string getUserStoreId() 获取<p>用户目录ID</p>
 * @method void setUserStoreId(string $UserStoreId) 设置<p>用户目录ID</p>
 * @method Pageable getPageable() 获取<p>分页数据</p>
 * @method void setPageable(Pageable $Pageable) 设置<p>分页数据</p>
 * @method array getFilters() 获取<p>Key可选值为condition、userGroup、userOrg、weComUserOrg<li> <strong>condition</strong> </li>    Values = 查询条件，用户ID，用户名称，手机或邮箱<li> <strong>userGroup</strong> </li>    Values = 用户组ID<li> <strong>userOrg</strong> </li>    Values = 用户所属机构ID<li> <strong>weComUserOrg</strong> </li>    Values = 用户所属企业微信机构ID</p>
 * @method void setFilters(array $Filters) 设置<p>Key可选值为condition、userGroup、userOrg、weComUserOrg<li> <strong>condition</strong> </li>    Values = 查询条件，用户ID，用户名称，手机或邮箱<li> <strong>userGroup</strong> </li>    Values = 用户组ID<li> <strong>userOrg</strong> </li>    Values = 用户所属机构ID<li> <strong>weComUserOrg</strong> </li>    Values = 用户所属企业微信机构ID</p>
 * @method boolean getOriginal() 获取<p>返回信息是否为原文</p>
 * @method void setOriginal(boolean $Original) 设置<p>返回信息是否为原文</p>
 */
class ListUserRequest extends AbstractModel
{
    /**
     * @var string <p>用户目录ID</p>
     */
    public $UserStoreId;

    /**
     * @var Pageable <p>分页数据</p>
     */
    public $Pageable;

    /**
     * @var array <p>Key可选值为condition、userGroup、userOrg、weComUserOrg<li> <strong>condition</strong> </li>    Values = 查询条件，用户ID，用户名称，手机或邮箱<li> <strong>userGroup</strong> </li>    Values = 用户组ID<li> <strong>userOrg</strong> </li>    Values = 用户所属机构ID<li> <strong>weComUserOrg</strong> </li>    Values = 用户所属企业微信机构ID</p>
     */
    public $Filters;

    /**
     * @var boolean <p>返回信息是否为原文</p>
     */
    public $Original;

    /**
     * @param string $UserStoreId <p>用户目录ID</p>
     * @param Pageable $Pageable <p>分页数据</p>
     * @param array $Filters <p>Key可选值为condition、userGroup、userOrg、weComUserOrg<li> <strong>condition</strong> </li>    Values = 查询条件，用户ID，用户名称，手机或邮箱<li> <strong>userGroup</strong> </li>    Values = 用户组ID<li> <strong>userOrg</strong> </li>    Values = 用户所属机构ID<li> <strong>weComUserOrg</strong> </li>    Values = 用户所属企业微信机构ID</p>
     * @param boolean $Original <p>返回信息是否为原文</p>
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
        if (array_key_exists("UserStoreId",$param) and $param["UserStoreId"] !== null) {
            $this->UserStoreId = $param["UserStoreId"];
        }

        if (array_key_exists("Pageable",$param) and $param["Pageable"] !== null) {
            $this->Pageable = new Pageable();
            $this->Pageable->deserialize($param["Pageable"]);
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Original",$param) and $param["Original"] !== null) {
            $this->Original = $param["Original"];
        }
    }
}
