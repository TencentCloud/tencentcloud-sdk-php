<?php

namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLiveSnapshotTemplate请求参数结构体
 *
 * @method string getTemplateName() 获取模板名称。
长度上限：255字节。
仅支持中文、英文、数字、_、-。
 * @method void setTemplateName(string $TemplateName) 设置模板名称。
长度上限：255字节。
仅支持中文、英文、数字、_、-。
 * @method integer getCosAppId() 获取Cos 应用 ID。
 * @method void setCosAppId(integer $CosAppId) 设置Cos 应用 ID。
 * @method string getCosBucket() 获取Cos Bucket名称。
注：CosBucket参数值不能包含-[appid] 部分。
 * @method void setCosBucket(string $CosBucket) 设置Cos Bucket名称。
注：CosBucket参数值不能包含-[appid] 部分。
 * @method string getCosRegion() 获取Cos地区。
 * @method void setCosRegion(string $CosRegion) 设置Cos地区。
 * @method string getDescription() 获取描述信息。
长度上限：1024字节。
仅支持中文、英文、数字、_、-。
 * @method void setDescription(string $Description) 设置描述信息。
长度上限：1024字节。
仅支持中文、英文、数字、_、-。
 * @method integer getSnapshotInterval() 获取截图间隔，单位s，默认10s。
范围： 2s ~ 300s。
 * @method void setSnapshotInterval(integer $SnapshotInterval) 设置截图间隔，单位s，默认10s。
范围： 2s ~ 300s。
 * @method integer getWidth() 获取截图宽度。默认：0（原始宽）。
范围：0-3000 。
 * @method void setWidth(integer $Width) 设置截图宽度。默认：0（原始宽）。
范围：0-3000 。
 * @method integer getHeight() 获取截图高度。默认：0（原始高）。
范围：0-2000 。
 * @method void setHeight(integer $Height) 设置截图高度。默认：0（原始高）。
范围：0-2000 。
 * @method integer getPornFlag() 获取是否开启鉴黄，0：不开启，1：开启。默认：0。
 * @method void setPornFlag(integer $PornFlag) 设置是否开启鉴黄，0：不开启，1：开启。默认：0。
 * @method string getCosPrefix() 获取Cos Bucket文件夹前缀。
如不传，实际按默认值
/{Year}-{Month}-{Day}
生效
 * @method void setCosPrefix(string $CosPrefix) 设置Cos Bucket文件夹前缀。
如不传，实际按默认值
/{Year}-{Month}-{Day}
生效
 * @method string getCosFileName() 获取Cos 文件名称。
如不传，实际按默认值
{StreamID}-screenshot-{Hour}-{Minute}-{Second}-{Width}x{Height}{Ext}
生效
 * @method void setCosFileName(string $CosFileName) 设置Cos 文件名称。
如不传，实际按默认值
{StreamID}-screenshot-{Hour}-{Minute}-{Second}-{Width}x{Height}{Ext}
生效
 */
class CreateSnapshotTemplateRequest extends AbstractModel
{
    /**
     * @var string 模板名称。
    长度上限：255字节。
    仅支持中文、英文、数字、_、-。
     */
    public $TemplateName;

    /**
     * @var integer Cos 应用 ID。
     */
    public $CosAppId;

    /**
     * @var string Cos Bucket名称。
    注：CosBucket参数值不能包含-[appid] 部分。
     */
    public $CosBucket;

    /**
     * @var string Cos地区。
     */
    public $CosRegion;

    /**
     * @var string 描述信息。
    长度上限：1024字节。
    仅支持中文、英文、数字、_、-。
     */
    public $Description;

    /**
     * @var string 创建TRTC截图模版专用参数。
     */
    public $ProductName;

    /**
     * @var integer 截图间隔，单位s，默认10s。
    范围： 2s ~ 300s。
     */
    public $SnapshotInterval;

    /**
     * @var integer 截图宽度。默认：0（原始宽）。
    范围：0-3000 。
     */
    public $Width;

    /**
     * @var integer 截图高度。默认：0（原始高）。
    范围：0-2000 。
     */
    public $Height;

    /**
     * @var integer 是否开启鉴黄，0：不开启，1：开启。默认：0。
     */
    public $PornFlag;

    /**
     * @var string Cos Bucket文件夹前缀。
    如不传，实际按默认值
    /{Year}-{Month}-{Day}
    生效
     */
    public $CosPrefix;

    /**
     * @var string Cos 文件名称。
    如不传，实际按默认值
    {StreamID}-screenshot-{Hour}-{Minute}-{Second}-{Width}x{Height}{Ext}
    生效
     */
    public $CosFileName;

    /**
     * @param string $TemplateName 模板名称。
    长度上限：255字节。
    仅支持中文、英文、数字、_、-。
     * @param integer $CosAppId Cos 应用 ID。
     * @param string $CosBucket Cos Bucket名称。
    注：CosBucket参数值不能包含-[appid] 部分。
     * @param string $CosRegion Cos地区。
     * @param string $Description 描述信息。
     * @param string $ProductName 创建TRTC截图模版专用参数。
    长度上限：1024字节。
    仅支持中文、英文、数字、_、-。
     * @param integer $SnapshotInterval 截图间隔，单位s，默认10s。
    范围： 2s ~ 300s。
     * @param integer $Width 截图宽度。默认：0（原始宽）。
    范围：0-3000 。
     * @param integer $Height 截图高度。默认：0（原始高）。
    范围：0-2000 。
     * @param integer $PornFlag 是否开启鉴黄，0：不开启，1：开启。默认：0。
     * @param string $CosPrefix Cos Bucket文件夹前缀。
    如不传，实际按默认值
    /{Year}-{Month}-{Day}
    生效
     * @param string $CosFileName Cos 文件名称。
    如不传，实际按默认值
    {StreamID}-screenshot-{Hour}-{Minute}-{Second}-{Width}x{Height}{Ext}
    生效
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
        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("CosAppId",$param) and $param["CosAppId"] !== null) {
            $this->CosAppId = $param["CosAppId"];
        }

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("SnapshotInterval",$param) and $param["SnapshotInterval"] !== null) {
            $this->SnapshotInterval = $param["SnapshotInterval"];
        }

        if (array_key_exists("Width",$param) and $param["Width"] !== null) {
            $this->Width = $param["Width"];
        }

        if (array_key_exists("Height",$param) and $param["Height"] !== null) {
            $this->Height = $param["Height"];
        }

        if (array_key_exists("PornFlag",$param) and $param["PornFlag"] !== null) {
            $this->PornFlag = $param["PornFlag"];
        }

        if (array_key_exists("CosPrefix",$param) and $param["CosPrefix"] !== null) {
            $this->CosPrefix = $param["CosPrefix"];
        }

        if (array_key_exists("CosFileName",$param) and $param["CosFileName"] !== null) {
            $this->CosFileName = $param["CosFileName"];
        }
    }
}
