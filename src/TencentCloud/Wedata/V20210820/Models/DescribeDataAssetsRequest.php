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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDataAssets请求参数结构体
 *
 * @method string getRequestFromSource() 获取请求来源，WEB 前端；CLIENT 客户端
 * @method void setRequestFromSource(string $RequestFromSource) 设置请求来源，WEB 前端；CLIENT 客户端
 * @method array getFilters() 获取过滤字段名称
Name 取值如下
      keyword 搜索关键字
      bizCatalogIds 表示目录分类取值
      DataAssetType 数据资产类型枚举取值：ALL-全部类型、TABLE-数据表
      DatasourceType 数据源类型
      datasourceIds 数据源ID列表
      DatabaseName 数据库名称
      InCharge 负责人
      ProjectId 项目ID
      Label 标签
      ProjectId 数据资产归属的项目ID
      AssetLevel 等级 取值：ALL-全部，40-核心，30-重要，20-一般，10-临时
      OwnerMe 我负责的
      PermissionMe 我有权限的
      MyFavorite 我收藏的
 * @method void setFilters(array $Filters) 设置过滤字段名称
Name 取值如下
      keyword 搜索关键字
      bizCatalogIds 表示目录分类取值
      DataAssetType 数据资产类型枚举取值：ALL-全部类型、TABLE-数据表
      DatasourceType 数据源类型
      datasourceIds 数据源ID列表
      DatabaseName 数据库名称
      InCharge 负责人
      ProjectId 项目ID
      Label 标签
      ProjectId 数据资产归属的项目ID
      AssetLevel 等级 取值：ALL-全部，40-核心，30-重要，20-一般，10-临时
      OwnerMe 我负责的
      PermissionMe 我有权限的
      MyFavorite 我收藏的
 * @method array getOrderFields() 获取排序字段列表
取值：
     Name： Table-按表名，LikeCount-按热度
     Direction： ASC, DESC
 * @method void setOrderFields(array $OrderFields) 设置排序字段列表
取值：
     Name： Table-按表名，LikeCount-按热度
     Direction： ASC, DESC
 * @method integer getPageNumber() 获取页码，配合pageSize使用
 * @method void setPageNumber(integer $PageNumber) 设置页码，配合pageSize使用
 * @method integer getPageSize() 获取每页数目，配合pageNumber使用
 * @method void setPageSize(integer $PageSize) 设置每页数目，配合pageNumber使用
 */
class DescribeDataAssetsRequest extends AbstractModel
{
    /**
     * @var string 请求来源，WEB 前端；CLIENT 客户端
     */
    public $RequestFromSource;

    /**
     * @var array 过滤字段名称
Name 取值如下
      keyword 搜索关键字
      bizCatalogIds 表示目录分类取值
      DataAssetType 数据资产类型枚举取值：ALL-全部类型、TABLE-数据表
      DatasourceType 数据源类型
      datasourceIds 数据源ID列表
      DatabaseName 数据库名称
      InCharge 负责人
      ProjectId 项目ID
      Label 标签
      ProjectId 数据资产归属的项目ID
      AssetLevel 等级 取值：ALL-全部，40-核心，30-重要，20-一般，10-临时
      OwnerMe 我负责的
      PermissionMe 我有权限的
      MyFavorite 我收藏的
     */
    public $Filters;

    /**
     * @var array 排序字段列表
取值：
     Name： Table-按表名，LikeCount-按热度
     Direction： ASC, DESC
     */
    public $OrderFields;

    /**
     * @var integer 页码，配合pageSize使用
     */
    public $PageNumber;

    /**
     * @var integer 每页数目，配合pageNumber使用
     */
    public $PageSize;

    /**
     * @param string $RequestFromSource 请求来源，WEB 前端；CLIENT 客户端
     * @param array $Filters 过滤字段名称
Name 取值如下
      keyword 搜索关键字
      bizCatalogIds 表示目录分类取值
      DataAssetType 数据资产类型枚举取值：ALL-全部类型、TABLE-数据表
      DatasourceType 数据源类型
      datasourceIds 数据源ID列表
      DatabaseName 数据库名称
      InCharge 负责人
      ProjectId 项目ID
      Label 标签
      ProjectId 数据资产归属的项目ID
      AssetLevel 等级 取值：ALL-全部，40-核心，30-重要，20-一般，10-临时
      OwnerMe 我负责的
      PermissionMe 我有权限的
      MyFavorite 我收藏的
     * @param array $OrderFields 排序字段列表
取值：
     Name： Table-按表名，LikeCount-按热度
     Direction： ASC, DESC
     * @param integer $PageNumber 页码，配合pageSize使用
     * @param integer $PageSize 每页数目，配合pageNumber使用
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
        if (array_key_exists("RequestFromSource",$param) and $param["RequestFromSource"] !== null) {
            $this->RequestFromSource = $param["RequestFromSource"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderFields",$param) and $param["OrderFields"] !== null) {
            $this->OrderFields = [];
            foreach ($param["OrderFields"] as $key => $value){
                $obj = new OrderField();
                $obj->deserialize($value);
                array_push($this->OrderFields, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }
    }
}
