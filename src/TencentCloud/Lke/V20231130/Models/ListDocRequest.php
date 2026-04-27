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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDoc请求参数结构体
 *
 * @method string getBotBizId() 获取<p>应用ID, 获取方式参看 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。<br>查询知识库下文档时，该参数填入知识库ID。</p>
 * @method void setBotBizId(string $BotBizId) 设置<p>应用ID, 获取方式参看 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。<br>查询知识库下文档时，该参数填入知识库ID。</p>
 * @method integer getPageNumber() 获取<p>页码(必须大于0)</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码(必须大于0)</p>
 * @method integer getPageSize() 获取<p>每页数量(取值范围1-200)</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量(取值范围1-200)</p>
 * @method string getQuery() 获取<p>查询内容</p><p>输入特定标识 lke:system:untagged  将查询所有未关联标签的文档</p>
 * @method void setQuery(string $Query) 设置<p>查询内容</p><p>输入特定标识 lke:system:untagged  将查询所有未关联标签的文档</p>
 * @method array getStatus() 获取<p>文档状态： 1-未生成 2-生成中 3-生成成功 4-生成失败 5-删除中 6-删除成功  7-审核中  8-审核失败 9-审核成功  10,12-导入成功  13-学习中  14-学习失败  15-更新中  16-更新失败  17-解析中  18-解析失败  19-导入失败   20-已过期 21-超量失效 22-超量失效恢复</p>
 * @method void setStatus(array $Status) 设置<p>文档状态： 1-未生成 2-生成中 3-生成成功 4-生成失败 5-删除中 6-删除成功  7-审核中  8-审核失败 9-审核成功  10,12-导入成功  13-学习中  14-学习失败  15-更新中  16-更新失败  17-解析中  18-解析失败  19-导入失败   20-已过期 21-超量失效 22-超量失效恢复</p>
 * @method string getQueryType() 获取<p>查询类型 filename 文档、 attribute 标签</p>
 * @method void setQueryType(string $QueryType) 设置<p>查询类型 filename 文档、 attribute 标签</p>
 * @method string getCateBizId() 获取<p>分类ID, 可以通过调用ListDocCate接口,查看其返回结果获取</p>
 * @method void setCateBizId(string $CateBizId) 设置<p>分类ID, 可以通过调用ListDocCate接口,查看其返回结果获取</p>
 * @method array getFileTypes() 获取<p>文件类型分类筛选</p>
 * @method void setFileTypes(array $FileTypes) 设置<p>文件类型分类筛选</p>
 * @method array getFilterFlag() 获取<p>文档列表筛选标识位</p>
 * @method void setFilterFlag(array $FilterFlag) 设置<p>文档列表筛选标识位</p>
 * @method integer getShowCurrCate() 获取<p>是否只展示当前分类的数据 0不是，1是</p>
 * @method void setShowCurrCate(integer $ShowCurrCate) 设置<p>是否只展示当前分类的数据 0不是，1是</p>
 * @method integer getEnableScope() 获取<p>文档生效域；不检索默认为0。检索枚举值如下：<br>1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效</p>
 * @method void setEnableScope(integer $EnableScope) 设置<p>文档生效域；不检索默认为0。检索枚举值如下：<br>1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效</p>
 * @method TimeRange getUpdateTime() 获取<p>文档更新时间范围</p>
 * @method void setUpdateTime(TimeRange $UpdateTime) 设置<p>文档更新时间范围</p>
 */
class ListDocRequest extends AbstractModel
{
    /**
     * @var string <p>应用ID, 获取方式参看 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。<br>查询知识库下文档时，该参数填入知识库ID。</p>
     */
    public $BotBizId;

    /**
     * @var integer <p>页码(必须大于0)</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页数量(取值范围1-200)</p>
     */
    public $PageSize;

    /**
     * @var string <p>查询内容</p><p>输入特定标识 lke:system:untagged  将查询所有未关联标签的文档</p>
     */
    public $Query;

    /**
     * @var array <p>文档状态： 1-未生成 2-生成中 3-生成成功 4-生成失败 5-删除中 6-删除成功  7-审核中  8-审核失败 9-审核成功  10,12-导入成功  13-学习中  14-学习失败  15-更新中  16-更新失败  17-解析中  18-解析失败  19-导入失败   20-已过期 21-超量失效 22-超量失效恢复</p>
     */
    public $Status;

    /**
     * @var string <p>查询类型 filename 文档、 attribute 标签</p>
     */
    public $QueryType;

    /**
     * @var string <p>分类ID, 可以通过调用ListDocCate接口,查看其返回结果获取</p>
     */
    public $CateBizId;

    /**
     * @var array <p>文件类型分类筛选</p>
     */
    public $FileTypes;

    /**
     * @var array <p>文档列表筛选标识位</p>
     */
    public $FilterFlag;

    /**
     * @var integer <p>是否只展示当前分类的数据 0不是，1是</p>
     */
    public $ShowCurrCate;

    /**
     * @var integer <p>文档生效域；不检索默认为0。检索枚举值如下：<br>1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效</p>
     */
    public $EnableScope;

    /**
     * @var TimeRange <p>文档更新时间范围</p>
     */
    public $UpdateTime;

    /**
     * @param string $BotBizId <p>应用ID, 获取方式参看 <a href="https://cloud.tencent.com/document/product/1759/109469#4eecb8c1-6ce4-45f5-8fa2-b269449d8efa">BotBizId</a>。<br>查询知识库下文档时，该参数填入知识库ID。</p>
     * @param integer $PageNumber <p>页码(必须大于0)</p>
     * @param integer $PageSize <p>每页数量(取值范围1-200)</p>
     * @param string $Query <p>查询内容</p><p>输入特定标识 lke:system:untagged  将查询所有未关联标签的文档</p>
     * @param array $Status <p>文档状态： 1-未生成 2-生成中 3-生成成功 4-生成失败 5-删除中 6-删除成功  7-审核中  8-审核失败 9-审核成功  10,12-导入成功  13-学习中  14-学习失败  15-更新中  16-更新失败  17-解析中  18-解析失败  19-导入失败   20-已过期 21-超量失效 22-超量失效恢复</p>
     * @param string $QueryType <p>查询类型 filename 文档、 attribute 标签</p>
     * @param string $CateBizId <p>分类ID, 可以通过调用ListDocCate接口,查看其返回结果获取</p>
     * @param array $FileTypes <p>文件类型分类筛选</p>
     * @param array $FilterFlag <p>文档列表筛选标识位</p>
     * @param integer $ShowCurrCate <p>是否只展示当前分类的数据 0不是，1是</p>
     * @param integer $EnableScope <p>文档生效域；不检索默认为0。检索枚举值如下：<br>1-不生效；2-仅开发域生效；3-仅发布域生效；4-开发域和发布域均生效</p>
     * @param TimeRange $UpdateTime <p>文档更新时间范围</p>
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

        if (array_key_exists("EnableScope",$param) and $param["EnableScope"] !== null) {
            $this->EnableScope = $param["EnableScope"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = new TimeRange();
            $this->UpdateTime->deserialize($param["UpdateTime"]);
        }
    }
}
