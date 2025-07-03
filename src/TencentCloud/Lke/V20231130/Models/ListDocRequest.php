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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDoc请求参数结构体
 *
 * @method string getBotBizId() 获取应用ID
 * @method void setBotBizId(string $BotBizId) 设置应用ID
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取每页数量
 * @method void setPageSize(integer $PageSize) 设置每页数量
 * @method string getQuery() 获取查询内容

输入特定标识 lke:system:untagged  将查询所有未关联标签的文档
 * @method void setQuery(string $Query) 设置查询内容

输入特定标识 lke:system:untagged  将查询所有未关联标签的文档
 * @method array getStatus() 获取文档状态： 1-未生成 2-生成中 3-生成成功 4-生成失败 5-删除中 6-删除成功  7-审核中  8-审核失败 9-审核成功  10-待发布  11-发布中  12-已发布  13-学习中  14-学习失败  15-更新中  16-更新失败  17-解析中  18-解析失败  19-导入失败   20-已过期 21-超量失效 22-超量失效恢复
 * @method void setStatus(array $Status) 设置文档状态： 1-未生成 2-生成中 3-生成成功 4-生成失败 5-删除中 6-删除成功  7-审核中  8-审核失败 9-审核成功  10-待发布  11-发布中  12-已发布  13-学习中  14-学习失败  15-更新中  16-更新失败  17-解析中  18-解析失败  19-导入失败   20-已过期 21-超量失效 22-超量失效恢复
 * @method string getQueryType() 获取查询类型 filename 文档、 attribute 标签
 * @method void setQueryType(string $QueryType) 设置查询类型 filename 文档、 attribute 标签
 * @method string getCateBizId() 获取分类ID
 * @method void setCateBizId(string $CateBizId) 设置分类ID
 * @method array getFileTypes() 获取文件类型分类筛选
 * @method void setFileTypes(array $FileTypes) 设置文件类型分类筛选
 * @method array getFilterFlag() 获取文档列表筛选标识位
 * @method void setFilterFlag(array $FilterFlag) 设置文档列表筛选标识位
 * @method integer getShowCurrCate() 获取是否只展示当前分类的数据 0不是，1是
 * @method void setShowCurrCate(integer $ShowCurrCate) 设置是否只展示当前分类的数据 0不是，1是
 */
class ListDocRequest extends AbstractModel
{
    /**
     * @var string 应用ID
     */
    public $BotBizId;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 每页数量
     */
    public $PageSize;

    /**
     * @var string 查询内容

输入特定标识 lke:system:untagged  将查询所有未关联标签的文档
     */
    public $Query;

    /**
     * @var array 文档状态： 1-未生成 2-生成中 3-生成成功 4-生成失败 5-删除中 6-删除成功  7-审核中  8-审核失败 9-审核成功  10-待发布  11-发布中  12-已发布  13-学习中  14-学习失败  15-更新中  16-更新失败  17-解析中  18-解析失败  19-导入失败   20-已过期 21-超量失效 22-超量失效恢复
     */
    public $Status;

    /**
     * @var string 查询类型 filename 文档、 attribute 标签
     */
    public $QueryType;

    /**
     * @var string 分类ID
     */
    public $CateBizId;

    /**
     * @var array 文件类型分类筛选
     */
    public $FileTypes;

    /**
     * @var array 文档列表筛选标识位
     */
    public $FilterFlag;

    /**
     * @var integer 是否只展示当前分类的数据 0不是，1是
     */
    public $ShowCurrCate;

    /**
     * @param string $BotBizId 应用ID
     * @param integer $PageNumber 页码
     * @param integer $PageSize 每页数量
     * @param string $Query 查询内容

输入特定标识 lke:system:untagged  将查询所有未关联标签的文档
     * @param array $Status 文档状态： 1-未生成 2-生成中 3-生成成功 4-生成失败 5-删除中 6-删除成功  7-审核中  8-审核失败 9-审核成功  10-待发布  11-发布中  12-已发布  13-学习中  14-学习失败  15-更新中  16-更新失败  17-解析中  18-解析失败  19-导入失败   20-已过期 21-超量失效 22-超量失效恢复
     * @param string $QueryType 查询类型 filename 文档、 attribute 标签
     * @param string $CateBizId 分类ID
     * @param array $FileTypes 文件类型分类筛选
     * @param array $FilterFlag 文档列表筛选标识位
     * @param integer $ShowCurrCate 是否只展示当前分类的数据 0不是，1是
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
        if (array_key_exists("BotBizId",$param) and $param["BotBizId"] !== null) {
            $this->BotBizId = $param["BotBizId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("QueryType",$param) and $param["QueryType"] !== null) {
            $this->QueryType = $param["QueryType"];
        }

        if (array_key_exists("CateBizId",$param) and $param["CateBizId"] !== null) {
            $this->CateBizId = $param["CateBizId"];
        }

        if (array_key_exists("FileTypes",$param) and $param["FileTypes"] !== null) {
            $this->FileTypes = $param["FileTypes"];
        }

        if (array_key_exists("FilterFlag",$param) and $param["FilterFlag"] !== null) {
            $this->FilterFlag = [];
            foreach ($param["FilterFlag"] as $key => $value){
                $obj = new DocFilterFlag();
                $obj->deserialize($value);
                array_push($this->FilterFlag, $obj);
            }
        }

        if (array_key_exists("ShowCurrCate",$param) and $param["ShowCurrCate"] !== null) {
            $this->ShowCurrCate = $param["ShowCurrCate"];
        }
    }
}
