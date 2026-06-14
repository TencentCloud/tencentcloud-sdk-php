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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePermissionRanks请求参数结构体
 *
 * @method integer getTableId() 获取<p>页数</p>
 * @method void setTableId(integer $TableId) 设置<p>页数</p>
 * @method string getMode() 获取<p>模式</p><p>枚举值：</p><ul><li>ALL： 全部</li><li>Specify： 指定</li><li>TAG： 标签</li></ul><p>默认值：ALL</p>
 * @method void setMode(string $Mode) 设置<p>模式</p><p>枚举值：</p><ul><li>ALL： 全部</li><li>Specify： 指定</li><li>TAG： 标签</li></ul><p>默认值：ALL</p>
 * @method string getRoleType() 获取<p>角色类型</p><p>枚举值：</p><ul><li>ROLES： 按角色</li><li>Others： 其它</li></ul><p>默认值：Others</p>
 * @method void setRoleType(string $RoleType) 设置<p>角色类型</p><p>枚举值：</p><ul><li>ROLES： 按角色</li><li>Others： 其它</li></ul><p>默认值：Others</p>
 * @method integer getRoleId() 获取<p>所有页码</p>
 * @method void setRoleId(integer $RoleId) 设置<p>所有页码</p>
 * @method string getRulerInfo() 获取<p>规则信息</p>
 * @method void setRulerInfo(string $RulerInfo) 设置<p>规则信息</p>
 * @method string getType() 获取<p>类型</p><p>枚举值：</p><ul><li>ROW： 行权限</li><li>COLUMN： 列权限</li></ul><p>默认值：ROW</p>
 * @method void setType(string $Type) 设置<p>类型</p><p>枚举值：</p><ul><li>ROW： 行权限</li><li>COLUMN： 列权限</li></ul><p>默认值：ROW</p>
 * @method string getOpenStatus() 获取<p>开启状态</p><p>枚举值：</p><ul><li>Open： 开启</li><li>Close： 关闭</li></ul><p>默认值：Close</p>
 * @method void setOpenStatus(string $OpenStatus) 设置<p>开启状态</p><p>枚举值：</p><ul><li>Open： 开启</li><li>Close： 关闭</li></ul><p>默认值：Close</p>
 * @method integer getProjectId() 获取<p>项目id</p>
 * @method void setProjectId(integer $ProjectId) 设置<p>项目id</p>
 * @method array getRowColumnConfigList() 获取<p>行列权限配置</p>
 * @method void setRowColumnConfigList(array $RowColumnConfigList) 设置<p>行列权限配置</p>
 */
class CreatePermissionRanksRequest extends AbstractModel
{
    /**
     * @var integer <p>页数</p>
     */
    public $TableId;

    /**
     * @var string <p>模式</p><p>枚举值：</p><ul><li>ALL： 全部</li><li>Specify： 指定</li><li>TAG： 标签</li></ul><p>默认值：ALL</p>
     */
    public $Mode;

    /**
     * @var string <p>角色类型</p><p>枚举值：</p><ul><li>ROLES： 按角色</li><li>Others： 其它</li></ul><p>默认值：Others</p>
     */
    public $RoleType;

    /**
     * @var integer <p>所有页码</p>
     */
    public $RoleId;

    /**
     * @var string <p>规则信息</p>
     */
    public $RulerInfo;

    /**
     * @var string <p>类型</p><p>枚举值：</p><ul><li>ROW： 行权限</li><li>COLUMN： 列权限</li></ul><p>默认值：ROW</p>
     */
    public $Type;

    /**
     * @var string <p>开启状态</p><p>枚举值：</p><ul><li>Open： 开启</li><li>Close： 关闭</li></ul><p>默认值：Close</p>
     */
    public $OpenStatus;

    /**
     * @var integer <p>项目id</p>
     */
    public $ProjectId;

    /**
     * @var array <p>行列权限配置</p>
     */
    public $RowColumnConfigList;

    /**
     * @param integer $TableId <p>页数</p>
     * @param string $Mode <p>模式</p><p>枚举值：</p><ul><li>ALL： 全部</li><li>Specify： 指定</li><li>TAG： 标签</li></ul><p>默认值：ALL</p>
     * @param string $RoleType <p>角色类型</p><p>枚举值：</p><ul><li>ROLES： 按角色</li><li>Others： 其它</li></ul><p>默认值：Others</p>
     * @param integer $RoleId <p>所有页码</p>
     * @param string $RulerInfo <p>规则信息</p>
     * @param string $Type <p>类型</p><p>枚举值：</p><ul><li>ROW： 行权限</li><li>COLUMN： 列权限</li></ul><p>默认值：ROW</p>
     * @param string $OpenStatus <p>开启状态</p><p>枚举值：</p><ul><li>Open： 开启</li><li>Close： 关闭</li></ul><p>默认值：Close</p>
     * @param integer $ProjectId <p>项目id</p>
     * @param array $RowColumnConfigList <p>行列权限配置</p>
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
        if (array_key_exists("TableId",$param) and $param["TableId"] !== null) {
            $this->TableId = $param["TableId"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("RoleType",$param) and $param["RoleType"] !== null) {
            $this->RoleType = $param["RoleType"];
        }

        if (array_key_exists("RoleId",$param) and $param["RoleId"] !== null) {
            $this->RoleId = $param["RoleId"];
        }

        if (array_key_exists("RulerInfo",$param) and $param["RulerInfo"] !== null) {
            $this->RulerInfo = $param["RulerInfo"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("OpenStatus",$param) and $param["OpenStatus"] !== null) {
            $this->OpenStatus = $param["OpenStatus"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RowColumnConfigList",$param) and $param["RowColumnConfigList"] !== null) {
            $this->RowColumnConfigList = [];
            foreach ($param["RowColumnConfigList"] as $key => $value){
                $obj = new RowColumnConfig();
                $obj->deserialize($value);
                array_push($this->RowColumnConfigList, $obj);
            }
        }
    }
}
